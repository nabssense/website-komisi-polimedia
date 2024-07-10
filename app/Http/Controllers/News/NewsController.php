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
        
        // Initialize query builder for News
        $query = News::query();

        // Apply search filter if 'search' parameter is present
        if ($request->search) {
            $query->where(function ($query) use ($request) {
                $query->where('title', 'like', "%$request->search%")
                      ->orWhere('content', 'like', "%$request->search%");
            });
        }

        // Apply category filter if 'category' parameter is present
        if ($request->category) {
            $category = CategoryNews::where('slug', $request->category)->firstOrFail();
            $query->where('category_id', $category->id);
        }

        // Apply sorting based on 'sort' parameter or default to 'created_at' descending
        $sortField = $request->sort_field ?? 'created_at';
        $sortOrder = $request->sort_order ?? 'desc';

        switch ($sortField) {
            case 'az':
                $query->orderBy('title', 'asc');
                break;
            case 'za':
                $query->orderBy('title', 'desc');
                break;
            case 'newest':
                $query->orderBy('created_at', 'desc');
                break;
            case 'oldest':
                $query->orderBy('created_at', 'asc');
                break;
            default:
                $query->orderBy($sortField, $sortOrder);
                break;
        }

        // Retrieve all news items
        $news = $query->get();

        // Retrieve all categoriesNews
        $categoriesNews = CategoryNews::all();

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
            'categoriesNews' => $categoriesNews,
            "search" => $request->search,
            'firstImages' => $firstImages,
            'withCategory' => isset($category) ? $category : null, // Pass selected category for highlighting
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
