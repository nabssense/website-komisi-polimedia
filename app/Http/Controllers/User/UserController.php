<?php

namespace App\Http\Controllers\User;


use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\User\UpdateFullnameRequest;
use App\Http\Requests\User\UpdatePasswordRequest;
use App\Http\Requests\User\UpdateProfilePictureRequest;

class UserController extends Controller
{
    //
    public function index()
    {
        // $user = User::where('email', $email)->first();
        // if (!$user){
        //     return abort(404);
        // }

        // $profile_picture = filter_var($user->profile_picture, FILTER_VALIDATE_URL)
        // ? $user->profile_picture : Storage::url($user->profile_picture);

        // $perPage = 5;
        // $columns = ['*'];
        // $questionsPageName = 'questions';
        // $answersPageName = 'answers';

        return view('pages.user.user-profile', [
            "title" => "Website Komisi | User Profile",
            "active" => "User Profile",


            // "user" => $user,
            // "profile_picture" => $profile_picture,
            // "questions" => Question::where('user_id', $user->id)
            // ->paginate($perPage, $columns, $questionsPageName, $answersPageName),
            // "answers" => Answer::where('user_id', $user->id)
            // ->paginate($perPage, $columns, $questionsPageName, $answersPageName),
        ]);
    }
    public function indexUser()
    {
        return view('pages.user.user', [
            "title" => "Website Komisi | User Profile",
            "active" => "User Profile",
        ]);
    }

    public function updateFullname(UpdateFullnameRequest $request)
    {
        /** @var \App\Models\User $user **/
        $user = Auth::user();

        // Update fullname
        $user->fullname = $request->fullname;

        // Simpan perubahan
        $user->save();

        return redirect()->back()->with('notif.success', 'Profil berhasil diperbarui.');
    }

    public function updatePassword(UpdatePasswordRequest $request)
    {
        /** @var \App\Models\User $user **/
        $user = auth()->user();
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect()->back()->with('notif.success', 'Kata sandi berhasil diperbarui!');
    }

    public function editProfilePicture()
    {
        return view('pages.user.edit-profile-picture', [
            "title" => "Website Komisi | Edit Profile Picture",
            "active" => "User Profile",
        ]);
    }

    public function updateProfilePicture(UpdateProfilePictureRequest $request)
    {
        /** @var \App\Models\User $user **/
        $user = Auth::user();
        
        // Simpan gambar baru jika diunggah
        if ($request->hasFile('profile_picture')) {
            $profilePicturePath = $request->file('profile_picture')->store('profile-pictures', 'public');
            $user->profile_picture = $profilePicturePath;
        } else {
            $modifiedFullname = str_replace(' ', '%20', $user->fullname);
            $user->profile_picture = config('app.avatar_generator_url') . $modifiedFullname;
        }
    
        $user->save();
    
        return redirect()->back()->with('notif.success', 'Gambar profil berhasil diubah.');
    }
}
