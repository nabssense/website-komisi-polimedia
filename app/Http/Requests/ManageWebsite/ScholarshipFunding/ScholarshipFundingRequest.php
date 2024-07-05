<?php

namespace App\Http\Requests\ManageWebsite\ScholarshipFunding;

use Illuminate\Foundation\Http\FormRequest;

class ScholarshipFundingRequest extends FormRequest
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
            'period_id' => 'nullable',
            'scholarship_type' => 'required|string|max:255',
            'statement_letter' => 'required|file|max:4120',
            'mbkm_program' => 'required|string|max:255',
            'student_activity' => 'required|string|max:255',
            'activity_certificate' => 'nullable|file|max:4120',
            'competition_status' => 'nullable|string|max:255',
            'competition_name' => 'nullable|string|max:255',
            'competition_level' => 'nullable|string|max:255',
            'competition_rank' => 'nullable|string|max:255',
            'competition_certificate' => 'nullable|file|max:4120',
        ];
    }
}
