<?php

namespace App\Http\Controllers\ForumDiscussion;

use App\Models\Discussion;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CategoryDiscussion;
use App\Http\Controllers\Controller;
use App\Http\Requests\ForumDiscussion\StoreRequest;

class DiscussionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        

        $discussions = Discussion::with('user', 'category');

        if ($request->search) {
            $discussions->where('title', 'like', "%$request->search%")
                ->orWhere('question', 'like', "%$request->search%");
        }


        return response()->view('pages.forum-diskusi.index', [
            "title" => "Website Komisi | Forum Diskusi",
            "active" => "Forum Diskusi",
            
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
    public function store(StoreRequest $request)
    {
        //
        

        $validated = $request->validated();
        
        $categoryId = CategoryDiscussion::where('slug', $validated['category_slug'])->first()->id;
        $validated['category_id'] = $categoryId;
        $validated['user_id'] = auth()->id();
        $validated['slug'] = Str::slug($validated['title']) . '-' . time();

        $stripContent = strip_tags($validated['question']);
        $isContentLong = strlen($stripContent) > 120;
        $validated['question_preview'] = $isContentLong 
            ? (substr($stripContent, 0, 120) . '...') : $stripContent;

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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
