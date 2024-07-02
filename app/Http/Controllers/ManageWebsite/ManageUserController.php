<?php

namespace App\Http\Controllers\ManageWebsite;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\ManageWebsite\ManageUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ManageUserController extends Controller
{
    //
    public function index()
    {
        return view('pages.user.kelola-web.kelola-akun', [
            "title" => "Website Komisi | Kelola Akun",
            "active" => "Kelola Akun",
        ]);
    }

    public function create()
    {
        $userTypes = User::getUserTypes();
        return view('pages.user.kelola-web.kelola-akun-tambah', [
            "title" => "Website Komisi | Kelola Akun",
            "active" => "Kelola Akun",

            "user_types" => $userTypes,
        ]);
    }

    public function store(ManageUserRequest $request)
    {
        /** @var \App\Models\User $user **/
        $user = Auth::user();
        
        $validated = $request->validated();
        $validated['password'] = Hash::make($validated['password']);
        $modifiedFullname = str_replace(' ', '%20', $validated['fullname']);
        if ($request->hasFile('profile_picture')) {
            $profilePicturePath = $request->file('profile_picture')->store('profile-pictures', 'public');
            $user->profile_picture = $profilePicturePath;
        } else {
            $modifiedFullname = str_replace(' ', '%20', $user->fullname);
            $user->profile_picture = config('app.avatar_generator_url') . $modifiedFullname;
        }

        User::create($validated);

        return redirect()->route('manage-users.create')->with('success', 'User berhasil ditambahkan.');
    }
}
