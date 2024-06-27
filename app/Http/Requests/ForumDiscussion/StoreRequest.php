<?php

namespace App\Http\Requests\ForumDiscussion;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'category_slug' => 'required|string|exists:App\Models\CategoryDiscussion,slug',
            'question' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:16000',
        ];
    }

    public function messages(): array
    {
        return [
            'image.max' => 'Ukuran gambar maximal 15 MB.', // Custom message for max size
        ];
    }
}
