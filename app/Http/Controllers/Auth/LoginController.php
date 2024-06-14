<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Redirect;



class LoginController extends Controller
{
    //
    public function index()
    {
        return view('pages.auth.masuk-akun', [
            "title" => "Website Komisi | Masuk Akun",
            "active" => "Masuk Akun",
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

