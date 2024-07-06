<?php

namespace App\Http\Requests\ManageWebsite;

use Illuminate\Foundation\Http\FormRequest;

class ManageUserUpdateRequest extends FormRequest
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
        $userId = $this->route('user')->id;
        return [
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'remove_profile_picture' => 'nullable|boolean', // Ubah max:2048 sesuai dengan kebutuhan ukuran file
            'fullname' => 'required',
            'email' => 'required|email|min:8|max:50|unique:users,email,' . $userId,
            'nim' => 'required|numeric|unique:users,user_type,nim,'. $userId,
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
