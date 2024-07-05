<?php

namespace App\Http\Controllers\ManageWebsite;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\ManageWebsite\ManageUserRequest;
use App\Http\Requests\ManageWebsite\ManageUserStoreRequest;
use App\Http\Requests\ManageWebsite\ManageUserUpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ManageUserController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        return view('pages.user.kelola-web.akun.index', [
            "title" => "Website Komisi | Kelola Akun",
            "active" => "Kelola Akun",

            "users" => $users,
        ]);
    }

    public function create(User $user)
    {
        $userTypes = User::getUserTypes();
        return view('pages.user.kelola-web.akun.tambah', [
            "title" => "Website Komisi | Kelola Akun",
            "active" => "Tambah Akun",

            "user" => $user,
            "user_types" => $userTypes,
        ]);
    }

    public function store(ManageUserStoreRequest $request, User $user)
    {
        /** @var \App\Models\User $user **/
        
        $validated = $request->validated();
        $validated['password'] = Hash::make($validated['password']);
        $modifiedFullname = str_replace(' ', '%20', $validated['fullname']);
        if ($request->hasFile('profile_picture')) {
            $profilePicturePath = $request->file('profile_picture')->store('profile-pictures', 'public');
            $user->profile_picture = $profilePicturePath;
        } else {
            $user->profile_picture = config('app.avatar_generator_url') . $modifiedFullname;
        }
        // Pastikan profile_picture diisi jika tidak ada file yang diupload dan tidak ada default value
        if (empty($validated['profile_picture'])) {
            $validated['profile_picture'] = config('app.avatar_generator_url') . $modifiedFullname;
        }
        User::create($validated);

        return redirect()->route('kelola.akun.create')->with('success', 'User berhasil ditambahkan.');
    }
    public function edit(User $user)
    {
        
        $userTypes = User::getUserTypes();
        return view('pages.user.kelola-web.akun.ubah', [
            "title" => "Website Komisi | Kelola Akun",
            "active" => "Tambah Akun",

            "user" => $user,
            "user_types" => $userTypes,
        ]);
    }

    public function update(ManageUserUpdateRequest $request, User $user)
    {
        $validated = $request->validated();
        if ($request->filled('password')) {
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }

        if ($request->hasFile('profile_picture')) {
            $profilePicturePath = $request->file('profile_picture')->store('profile-pictures', 'public');
            $validated['profile_picture'] = $profilePicturePath;
        }

        $user->update($validated);

        return redirect()->route('kelola.akun.index')->with('success', 'User berhasil diperbarui.');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('kelola.akun.index')->with('success', 'User berhasil dihapus.');
    }

    public function toggleStatus($id)
    {
        $users = User::findOrFail($id);
        $users->status = $users->status === 'Aktif' ? 'Tidak Aktif' : 'Aktif';
        $users->save();

        return response()->json(['status' => $users->status]);
    }
}
