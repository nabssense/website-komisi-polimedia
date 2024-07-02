<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\CategoryNews;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function index(Request $request){

        $news = News::all();

        // Mengambil semua data berita
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
        if ($request->search) {
            $news->where('title', 'like', "%$request->search%")
                ->orWhere('question', 'like', "%$request->search%");
                
        }
        // Mengatur urutan berdasarkan parameter
        

        return view('pages.berita.berita', [
            "title" => "Website Komisi | Berita",
            "active" => "Berita",

            'news' => $news,
            'categories' => $categories,
            "search" => $request->search,
            'firstImages' => $firstImages, 
        ]);

    }
}
