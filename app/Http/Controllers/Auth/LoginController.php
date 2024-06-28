<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Discussion;
use Illuminate\Http\Request;
use App\Models\CategoryDiscussion;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Redirect;



class LoginController extends Controller
{
    //
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
        
        return view('pages.auth.masuk-akun', [
            "title" => "Website Komisi | Masuk Akun",
            "active" => "Masuk Akun",

            'discussionsTerbantu' => $discussionsTerbantu,
            'discussions' => $discussions->orderBy('created_at', 'desc')->paginate(10)->withQueryString(),
            'categories' => CategoryDiscussion::all(),
            'search' => $request->search,
        ]);
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {
            // Jika login berhasil, kirim respons JSON
            return response()->json(['success' => true], 200);
        }

        // Jika login gagal, kirim respons JSON dengan status 401 (Unauthorized)
        return response()->json(['success' => false], 401);
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('beranda.index');
    }
}

