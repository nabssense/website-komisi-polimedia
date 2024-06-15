<?php

namespace App\Http\Requests\User;

use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'fullname' => ['required', 'alpha_dash', 'fullname', 'min:3', 'max:150'],
            'password' => ['nullable', 'confirmed'],
            'password_confirmation' => ['nullable'],
            'profile_picture' => ['nullable', 'image', 'max:2500'],
        ];
    }
}
