<?php

namespace App\Http\Controllers\ForumDiscussion;

use App\Models\Answer;
use App\Models\Discussion;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CategoryDiscussion;
use App\Http\Controllers\Controller;
use App\Http\Requests\ForumDiscussion\StoreRequest;
use App\Http\Requests\ForumDiscussion\UpdateRequest;

class DiscussionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // INDEX DISKUSI
    public function index(Request $request)
    {


        $discussions = Discussion::with('user', 'category');
        
       

        $discussionsTerbantu = Discussion::with('user', 'category')
            ->withCount('likes')
            ->orderBy('likes_count', 'desc')
            ->paginate(5);

        if ($request->search) {
            $discussions->where('title', 'like', "%$request->search%")
                ->orWhere('question', 'like', "%$request->search%");
                
        }
        // Mengatur urutan berdasarkan parameter
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


        return response()->view('pages.forum-diskusi.index', [
            "title" => "Website Komisi | Forum Diskusi",
            "active" => "Forum Diskusi",

            'discussionsTerbantu' => $discussionsTerbantu,
            'discussions' => $discussions->orderBy('created_at', 'desc')->paginate(10)->withQueryString(),
            'categories' => CategoryDiscussion::all(),
            'search' => $request->search,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return response()->view('pages.forum-diskusi.ajukan-pertanyaan', [
            "title" => "Website Komisi | Forum Diskusi",
            "active" => "Forum Diskusi",
            'categories' => CategoryDiscussion::all(),


        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    // FUNGSI CREATE
    public function store(StoreRequest $request)
    {
        //


        $validated = $request->validated();

        $categoryId = CategoryDiscussion::where('slug', $validated['category_slug'])->first()->id;
        $validated['category_id'] = $categoryId;
        $validated['user_id'] = auth()->id();
        $validated['slug'] = Str::slug($validated['title']) . '-' . time();


        // Handle the image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('image/discussion', 'public');
            $validated['image'] = $imagePath;
            // Simpan path gambar sementara dalam sesi jika ada error
            session()->put('image', $imagePath);
        }

        $create = Discussion::create($validated);

        if ($create) {
            session()->forget('image');
            session()->flash('notif.success', 'Discussion created successfully!');
            return redirect()->route('forum-diskusi.index');
            
        }
        
        return abort(500);
    }

    /**
     * Display the specified resource.
     */
    // DETAIL DISKUSI
    public function show(string $slug)
    {
        //
        // Ambil 5 diskusi terbanyak berdasarkan jumlah like
        
        $discussion = Discussion::with(['user', 'category'])->where('slug', $slug)->first();
        
        $discussionAnswers = Answer::where('discussion_id', $discussion->id)
        ->orderBy('created_at', 'desc')
        ->paginate(5);

        $discussionsTerbantu = Discussion::with('user', 'category')
            ->withCount('likes')
            ->orderBy('likes_count', 'desc')
            ->paginate(5);

            
        return response()->view('pages.forum-diskusi.pertanyaan', [
            "title" => "Website Komisi | Pertanyaan",
            "active" => "Forum Diskusi",

            'discussionsTerbantu' => $discussionsTerbantu,
            'discussion' => $discussion,
            'category' => CategoryDiscussion::all(),
            'discussionAnswers' => $discussionAnswers,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        //
        $discussion = Discussion::with('category')->where('slug', $slug)->first();

        if (!$discussion) {
            return abort(404);
        }

        $isOwnedByUser = $discussion->user_id == auth()->id();

        if (!$isOwnedByUser) {
            return abort(404);
        }



        return response()->view('pages.forum-diskusi.ajukan-pertanyaan', [
            "title" => "Website Komisi | Pertanyaan",
            "active" => "Pertanyaan",

            'discussion' => $discussion,
            'categories' => CategoryDiscussion::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    // FUNGSI EDIT
    public function update(UpdateRequest $request, string $slug)
    {
        //
        $discussion = Discussion::with('category')->where('slug', $slug)->first();

        if (!$discussion) {
            return abort(404);
        }

        $isOwnedByUser = $discussion->user_id == auth()->id();

        if (!$isOwnedByUser) {
            return abort(404);
        }

        
        
        $validated = $request->validated();
        $categoryId = CategoryDiscussion::where('slug', $validated['category_slug'])->first()->id;

        $validated['category_id'] = $categoryId;
        $validated['user_id'] = auth()->id();

        // Handle the image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('image/discussion', 'public');
            $validated['image'] = $imagePath;
            // Simpan path gambar sementara dalam sesi jika ada error
            session()->put('image', $imagePath);
        }

        $update = $discussion->update($validated);

        if ($update) {
            session()->forget('image');
            session()->flash('notif.success', 'Discussion updated successfully!');
            return redirect()->route('forum-diskusi.show', $slug);
        }

        return abort(500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        //
        
        $discussion = Discussion::with('category')->where('slug', $slug)->first();

        if (!$discussion) {
            return abort(404);
        }
        
        $isOwnedByUser = $discussion->user_id == auth()->id();

        if (!$isOwnedByUser) {
            return abort(404);
        }

        $delete = $discussion->delete();

        if ($delete) {
            session()->flash('notif.success', 'Discussion deleted successfully');
            return redirect()->route('forum-diskusi.index');
        }

        return abort(500);
    }
}
