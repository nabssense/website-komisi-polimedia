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
            'user_type' => 'required|string|max:255',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'fullname' => 'required|string|max:255',
            'nim' => 'required|numeric|unique:users,user_type,nim,'. $userId,
            'edu_program' => 'nullable|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $userId,
            'password' => 'nullable',
            'status' => 'required',
        ];
    }
}
