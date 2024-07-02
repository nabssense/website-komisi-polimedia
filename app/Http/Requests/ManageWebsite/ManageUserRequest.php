<?php

namespace App\Http\Requests\ManageWebsite;

use Illuminate\Support\Facades\Password;
use Illuminate\Foundation\Http\FormRequest;

class ManageUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Ubah max:2048 sesuai dengan kebutuhan ukuran file
            'remove_profile_picture' => 'nullable|boolean',
            'fullname' => 'required',
            'email' => 'required|email|unique:App\Models\User,email|min:8|max:50',
            'password' => 'required|string|min:8|confirmed',
            'nim' => 'required',
            'edu_program' => 'required',
            'user_type' => 'required|in:Mahasiswa,Admin,Pembina Komisi',
            'status' => 'required',
        ];
    }
}   
