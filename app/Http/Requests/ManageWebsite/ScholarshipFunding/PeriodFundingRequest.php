<?php

namespace App\Http\Requests\ManageWebsite\ScholarshipFunding;

use Illuminate\Foundation\Http\FormRequest;

class PeriodFundingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true; // Biasanya disetel ke true, sesuai kebijakan aplikasi Anda
    }

    public function rules()
    {
        return [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:4096',
            'name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            // Tambahkan aturan validasi lainnya sesuai kebutuhan
        ];
    }
}
