<?php

namespace App\Http\Controllers\ForumDiscussion;

use App\Http\Controllers\Controller;
use App\Models\CategoryDiscussion;
use App\Models\Discussion;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function show($categorySlug, Request $request)
    {
        $category = CategoryDiscussion::where('slug', $categorySlug)->first();

        if (!$category) {
            return abort(404);
        }


        $discussionsTerbantu = Discussion::with('user', 'category')
            ->withCount('likes')
            ->orderBy('likes_count', 'desc')
            ->paginate(5);


        $discussions = Discussion::with(['user', 'category'])->where('category_id', $category->id);


        if ($request->search) {
            $discussions->where('title', 'like', "%$request->search%")
                ->orWhere('question', 'like', "%$request->search%");
        }

        switch ($request->order_by) {
            case 'az':
                $discussions->orderBy('title', 'asc');
                break;
            case 'za':
                $discussions->orderBy('title', 'desc');
                break;
            case 'newest':
                $discussions->orderBy('created_at', 'desc');
                break;
            case 'oldest':
                $discussions->orderBy('created_at', 'asc');
                break;
            case 'most_liked':
                $discussions->withCount('likes')->orderBy('likes_count', 'desc');
                break;
            case 'least_liked':
                $discussions->withCount('likes')->orderBy('likes_count', 'asc');
                break;
            default:
                $discussions->orderBy('created_at', 'desc');
                break;
        }

        // Menggunakan paginate untuk paginasi
        $discussions = $discussions->paginate(10)->appends($request->query());
        
        return response()->view('pages.forum-diskusi.index', [
            "title" => "Forum Diskusi",
            "active" => "Forum Diskusi",

            'discussionsTerbantu' => $discussionsTerbantu,
            'discussions' => $discussions,
            'categoriesDiscussions' => CategoryDiscussion::all(),
            'withCategory' => $category,
            'search' => $request->search,
            'order_by' => $request->order_by,
        ]);
    }
}
