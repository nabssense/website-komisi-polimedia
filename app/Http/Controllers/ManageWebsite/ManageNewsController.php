<?php

namespace App\Http\Controllers\ManageWebsite;

use App\Models\News;
use App\Models\Berita;
use Illuminate\Support\Str;
use App\Models\CategoryNews;
use App\Models\Notification;
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
        $news = News::orderBy('created_at', 'desc')->get(); 

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
        $validated = $request->validated();

        // Process image uploads
        if ($request->hasFile('image')) {
            $gambarUtamaPaths = [];
            foreach ($request->file('image') as $file) {
                $path = $file->store('image/news', 'public');
                $gambarUtamaPaths[] = $path;
            }
            $validated['image'] = json_encode($gambarUtamaPaths);
        } else {
            $validated['image'] = null;
        }
    
        // Handle headline image upload
        if ($request->hasFile('headline_image')) {
            $gambarHeadlinePath = $request->file('headline_image')->store('image/news/headline', 'public');
            $validated['headline_image'] = $gambarHeadlinePath;
        } else {
            $validated['headline_image'] = null;
        }
    
        // Add user_id, category_id, and other necessary fields
        $validated['category_id'] = CategoryNews::where('slug', $validated['category_slug'])->first()->id;
        $validated['user_id'] = auth()->id();
        $validated['slug'] = Str::slug($validated['title']) . '-' . time();
    
        // Create news entry
        $news = News::create($validated);
    
        if ($news) {
            // Handle notifications if needed
            if ($request->input('send_notification') == 'Aktif') {
                $notification = new Notification();
                $notification->user_id = auth()->id();
                $notification->news_id = $news->id; // Use $news->id to get the newly created news id
                $notification->title = $validated['title'];
                $notification->image = $validated['image'];
                $notification->message = $validated['content']; // Ensure 'message' is set in your form
                $notification->save();
            }
    
            return redirect()->route('kelola.berita.index')->with('success', 'Berita berhasil ditambahkan!');
        }
    
        return back()->withInput()->with('error', 'Gagal menambahkan berita. Silakan coba lagi.');
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

        // Create news entry
       
    
        if ($news) {
            // Handle notifications if needed
            if ($request->input('send_notification') == 'Aktif') {
                $notification = new Notification();
                $notification->user_id = auth()->id();
                $notification->news_id = $news->id; // Use $news->id to get the newly created news id
                $notification->title = $validated['title'];
                $notification->image = $validated['image'];
                $notification->message = $validated['content']; // Ensure 'message' is set in your form
                $notification->save();
            }
    
            return redirect()->route('kelola.berita.index')->with('success', 'Berita berhasil ditambahkan!');
        }
    
        return back()->withInput()->with('error', 'Gagal menambahkan berita. Silakan coba lagi.');
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
