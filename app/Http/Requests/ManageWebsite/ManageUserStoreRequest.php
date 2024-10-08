<?php

namespace App\Http\Requests\ManageWebsite;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Password;
use Illuminate\Foundation\Http\FormRequest;

class ManageUserStoreRequest extends FormRequest
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
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'remove_profile_picture' => 'nullable|boolean', // Ubah max:2048 sesuai dengan kebutuhan ukuran file
            'fullname' => 'required',
            'email' => 'required|email|unique:App\Models\User,email|min:8|max:50',
            'password' => 'required|string|min:8',
            'nim' => [
                'required',
                Rule::unique('users', 'nim')->where(function ($query) {
                    return $query->where('user_type', $this->input('user_type'));
                }),
            ],
            'user_type' => 'required|in:Mahasiswa,Admin,Pembina Komisi',
            'status' => 'required',
        ];

        // Jika user_type bukan "Mahasiswa", buat edu_program menjadi opsional
        if ($this->input('user_type') !== 'Mahasiswa') {
            $rules['edu_program'] = 'nullable';
        } else {
            $rules['edu_program'] = 'required';
        }
    }
}   
