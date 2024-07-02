<?php

namespace App\Http\Requests\ManageWebsite;

use Illuminate\Foundation\Http\FormRequest;

class ManageNewsRequest extends FormRequest
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
    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_slug' => 'required|string|exists:App\Models\CategoryNews,slug',
            'image' => 'nullable|array',
            'image.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:20480', // Contoh aturan validasi untuk gambar
            'headline_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'headline_status' => 'nullable|in:Aktif,Tidak Aktif',
        ];
    }
}
