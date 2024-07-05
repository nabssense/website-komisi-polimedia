<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\CategoryNews;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function index(Request $request)
    {
        // Mengambil semua data berita dengan kueri builder
        $query = News::query();

        // Menerapkan pencarian jika ada
        if ($request->search) {
            $query->where('title', 'like', "%$request->search%")
                  ->orWhere('question', 'like', "%$request->search%");
        }

        // Menjalankan kueri untuk mendapatkan hasil
        $news = $query->get();

        // Mengambil semua kategori
        $categories = CategoryNews::all();

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

        return view('pages.berita.index', [
            "title" => "Website Komisi | Berita",
            "active" => "Berita",
            'news' => $news,
            'categories' => $categories,
            "search" => $request->search,
            'firstImages' => $firstImages,
        ]);
    }

    public function show($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();

        // Decode the JSON field 'image' into an array
        $images = json_decode($news->image, true);

        return view('pages.berita.show', [
            "title" => "Website Komisi | Berita Detail",
            "active" => "Berita",
            'news' => $news,
            'images' => $images,
        ]);
    }
}
