<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('pages.auth.daftar-akun', [
            "title" => "Website Komisi | Daftar",
            "active" => "Daftar Akun",
        ]);
    }
    public function register(RegisterRequest $request)
    {
         // dapatkan dulu request dari form request
        // tambahkan password dengan method bcrypt / hash password 
        // tambahkan picture dummy sesuai dengan usernamenya 
        // create user berdasarkan request yg sudah tervalidasi dan yg sudah kita proses
        // jika create berhasil maka loginkan user lalu redirect ke list discussion
        // jika tidak berhasil maka return 500
        

        $validated = $request->validated();
        $validated['password'] = bcrypt($validated['password']);
        $modifiedFullname = str_replace(' ', '%20', $validated['fullname']);
        $validated['profile_picture'] = config('app.avatar_generator_url') . $modifiedFullname;

        $create = User::create($validated);

        if ($create) {
            Auth::login($create);
            return response()->json(['success' => true]);
        }

        return abort(500);
    }
}
