<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFullnameRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Sesuaikan dengan aturan otorisasi Anda
    }

    public function rules()
    {
        return [
            'fullname' => 'required|string|max:255',
        ];
    }
}
