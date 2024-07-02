<?php

namespace App\Http\Controllers\ManageWebsite;

use App\Models\News;
use App\Models\Berita;
use Illuminate\Support\Str;
use App\Models\CategoryNews;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ManageWebsite\ManageNewsRequest;

class ManageNewsController extends Controller
{
    //
    public function toggleHeadline($id)
    {
        $news = News::findOrFail($id);
        $news->headline_status = $news->headline_status === 'Aktif' ? 'Tidak Aktif' : 'Aktif';
        $news->save();

        return response()->json(['status' => $news->headline_status]);
    }
    public function index()
    {
        // Mengambil semua data berita
        $categories = CategoryNews::all();
        $news = News::all();

        // Initialize an array to store image paths
        $firstImages = [];

        // Loop through each news item to get the first image
        foreach ($news as $item) {
            // Decode the JSON field 'image' into an array
            $images = json_decode($item->image, true);

            // Check if the images array is not empty
            if (!empty($images)) {
                // Get the first image path from the array and store it
                $firstImages[$item->id] = $images[0];
            } else {
                // If no images are found, set $firstImages[$item->id] to null or handle accordingly
                $firstImages[$item->id] = null;
            }
        }

        return view('pages.user.kelola-web.berita.index', [
            "title" => "Website Komisi | Kelola Berita",
            "active" => "Kelola Berita",
            "categories" => $categories,
            "news" => $news,
            'firstImages' => $firstImages, // Pass the array of first images to the view
        ]);
    }

    public function create()
    {
        // Mengambil semua data berita
        $categories = CategoryNews::all();
        // Mengembalikan view form untuk menambah berita
        return view('pages.user.kelola-web.berita.tambah', [
            "title" => "Website Komisi | Tambah Berita",
            "active" => "Tambah Berita",

            "categories" => $categories,
        ]);
    }

    public function store(ManageNewsRequest $request)
    {
        // Validasi dilakukan otomatis oleh request class
        $validated = $request->validated();

        // Menambahkan gambar utama jika ada
        $gambarUtamaPaths = [];
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $file) {
                $path = $file->store('image/news', 'public');
                $gambarUtamaPaths[] = $path;
            }
            $validated['image'] = json_encode($gambarUtamaPaths); // Konversi array ke JSON
        } else {
            $validated['image'] = null; // Berikan nilai null jika tidak ada gambar utama
        }

        $categoryId = CategoryNews::where('slug', $validated['category_slug'])->first()->id;
        $validated['category_id'] = $categoryId;
        $validated['user_id'] = auth()->id();
        $validated['slug'] = Str::slug($validated['title']) . '-' . time();

        // Menambahkan path gambar headline jika ada
        if ($request->hasFile('headline_image')) {
            $gambarHeadlinePath = $request->file('headline_image')->store('image/news/headline', 'public');
            $validated['headline_image'] = $gambarHeadlinePath;
        } else {
            $validated['headline_image'] = null; // Berikan nilai null jika tidak ada gambar headline
        }

        $create = News::create($validated);

        if ($create) {
            // Redirect atau berikan respons sesuai kebutuhan aplikasi Anda
            return redirect()->route('kelola.berita.index')->with('success', 'Berita berhasil ditambahkan!');
        }
    }


    public function edit($id)
    {
        // Temukan berita berdasarkan ID
        $news = News::findOrFail($id);
        $categories = CategoryNews::all();
        $news->images = json_decode($news->image);

        // Mengembalikan view form untuk mengedit berita
        return view('pages.user.kelola-web.berita.ubah', [
            "title" => "Website Komisi | Tambah Berita",
            "active" => "Tambah Berita",

            "categories" => $categories,
            "news" => $news
        ]);
    }

    public function update(ManageNewsRequest $request, $id)
{
    // Validasi dilakukan oleh ManageNewsRequest
    $validated = $request->validated();

    // Temukan berita berdasarkan ID
    $news = News::findOrFail($id);

    // Menangani gambar utama jika ada
    $gambarUtamaPaths = [];
    // Menangani gambar utama jika ada perubahan
    if ($request->hasFile('image')) {
        $gambarUtamaPaths = [];
        foreach ($request->file('image') as $file) {
            $path = $file->store('image/news', 'public');
            $gambarUtamaPaths[] = $path;
        }
        $validated['image'] = json_encode($gambarUtamaPaths); // Ubah array gambar ke JSON
    } else {
        // Jika tidak ada perubahan gambar, gunakan gambar yang sudah ada
        $validated['image'] = $news->image;
    }

    // Menangani gambar headline jika ada
    if ($request->hasFile('headline_image')) {
        $gambarHeadlinePath = $request->file('headline_image')->store('image/news/headline', 'public');
        $validated['headline_image'] = $gambarHeadlinePath;
    }

    // Update data berita sesuai input yang diterima
    $news->update([
        'title' => $validated['title'],
        'content' => $validated['content'],
        'category_slug' => $validated['category_slug'],
        'headline_status' => $validated['headline_status'],
        'headline_image' => isset($validated['headline_image']) ? $validated['headline_image'] : null,
        'image' => $validated['image'],
        // tambahkan kolom lainnya sesuai kebutuhan
    ]);

    // Redirect ke halaman index atau halaman lainnya
    return redirect()->route('kelola.berita.index')->with('success', 'Berita berhasil diperbarui!');
}


    public function destroy($id)
    {
        // Temukan berita berdasarkan ID dan hapus
        $news = News::findOrFail($id);
        $news->delete();

        // Redirect ke halaman index atau halaman lainnya
        return redirect()->route('kelola.berita.index')->with('success', 'Berita berhasil dihapus!');
    }
}
