<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Answer;
use App\Models\Question;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\User\UserUpdateRequest;



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
    
    public function edit($email) 
    {
        // get user berdasarkan username
        // jika user tidak ada atau user id tidak sama dengan id milik user yg sedang login 
        // maka return page not found
        // return view

        $user = User::where('email', $email)->first();
        if (!$user || $user->id !== auth()->id()) {
            return abort(404);
        }

        $picture = filter_var($user->picture, FILTER_VALIDATE_URL)
            ? $user->picture : Storage::url($user->picture);

        return view('pages.users.form', [
            'user' => $user,
            'picture' => $picture,
        ]);
    }

    public function update(UserUpdateRequest $request, $email)
    {
        // get user berdasarkan username
        // cek jika user tidak ada atau user id tidak sama dengan id milik user yg sedang login 
        // maka return page not found
        // get request yg sudah tervalidasi
        // cek apakah password diisi
        // jika iya maka nilainya dibiarkan dan hash password tsb
        // jika tidak maka hapus password di validated
        // cek apakah nilai picture tidak kosong
        //  jika iya maka 
        //   cek apakah nilai picture di tabel itu bukan url
        //   jika memang bukan maka hapus dulu picture tsb dari disk storage kita
        //  kita masukkan picture tsb ke disk storage kita dan get url nya
        //  masukkan url tsb ke variabel validated
        // update record
        // jika update berhasil maka kirim notif success dan redirect ke user profile kita
        // jika tidak maka abort 500

        $user = User::where('email', $email)->first();
        if (!$user || $user->id !== auth()->id()) {
            return abort(404);
        }

        $validated = $request->validated();

        if (isset($validated['password'])) {
            $validated['password'] = bcrypt($validated['password']);
        }
        else {
            unset($validated['password']);
        }

        if ($request->hasFile('profile_picture')) {
            if (filter_var($user->profile_picture, FILTER_VALIDATE_URL) === false) {
                Storage::disk('public')->delete($user->profile_picture);
            }

            $filePath = Storage::disk('public')->put('img/users/profile-picture', request()->file('profile_picture'));
            $validated['profile_picture'] = $filePath;
        }

        $update = $user->update($validated);

        if ($update) {
            session()->flash('notif.success', 'User profile updated successfully!');
            return redirect()->route('users.show', $validated['email']);
        }

        return abort(500);
    }
}
