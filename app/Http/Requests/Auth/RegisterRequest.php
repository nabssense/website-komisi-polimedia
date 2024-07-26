<?php

namespace App\Http\Requests\Auth;


use App\Rules\ValidEmail;
use Illuminate\Validation\Rules\Password;
use Egulias\EmailValidator\EmailValidator;
use Illuminate\Foundation\Http\FormRequest;
use Egulias\EmailValidator\Validation\RFCValidation;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */

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
            'fullname' => 'required',
            'email' => ['required', 'email', new ValidEmail],
            'password' => ['required', Password::min(8)->mixedCase()->numbers(), 'confirmed'],
            'nim' => '',
            'edu_program' => '',
            'user_type' => '',
            'status' => '',
            'admin' => '',
        ];
    }

    public function messages(): array
    {
        return [
            'fullname.required' => 'Nama lengkap harus diisi.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah digunakan.',
            'email.min' => 'Email minimal :min karakter.',
            'email.max' => 'Email maksimal :max karakter.',
            'email.valid_email' => 'Email tidak valid, periksa kembali.',
            'password.required' => 'Password harus diisi.',
            'password.min' => 'Password minimal :min karakter.',
            'password.mixed_case' => 'Password harus mengandung huruf besar dan kecil.',
            'password.numbers' => 'Password harus mengandung angka.',
            'password.symbols' => 'Password harus mengandung simbol.'
        ];
    }

    public function response(array $errors)
    {
        if ($this->expectsJson()) {
            return response()->json(['errors' => $errors], 422);
        }

        return parent::response($errors);
    }
}
