<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
            return redirect()->route('pages.beranda');
        }

        return redirect()->back()->withInput()->withErrors(['credentials' => 'Email atau Password Salah']);
    }
}

