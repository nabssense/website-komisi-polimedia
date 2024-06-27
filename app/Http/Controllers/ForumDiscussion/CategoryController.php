<?php

namespace App\Http\Controllers\ForumDiscussion;

use App\Http\Controllers\Controller;
use App\Models\CategoryDiscussion;
use App\Models\Discussion;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function show( $categorySlug, Request $request)
    {
        $category = CategoryDiscussion::where('slug', $categorySlug)->first();

        if (!$category){
            return abort(404);
        }

        $discussions = Discussion::with(['user','category'])->where('category_id', $category->id)
        ->orderBy('created_at', 'desc')
        ->paginate(10)
        ->withQueryString();

        if ($request->search) {
            $discussions->where('title', 'like', "%$request->search%")
                ->orWhere('question', 'like', "%$request->search%");
        }

        return response()->view('pages.forum-diskusi.index', [
            "title" => "Forum Diskusi",
            "active" => "Forum Diskusi",

            'discussions' => $discussions,
            'categories' => CategoryDiscussion::all(),
            'withCategory' => $category,
            'search' => $request->search,
        ]);
    }
}
