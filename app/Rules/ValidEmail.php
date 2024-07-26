<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Services\KickboxService;
use Illuminate\Support\Facades\Log;

class ValidEmail implements Rule
{
    protected $kickbox;

    public function __construct()
    {
        $this->kickbox = new KickboxService();
    }

    public function passes($attribute, $value)
    {
        $result = $this->kickbox->verifyEmail($value);

        // Log the validation result
        Log::info('Validation Result:', $result);

        return isset($result['result']) && in_array($result['result'], ['deliverable', 'risky']);
    }

    public function message()
    {
        return 'The :attribute must be a valid email address.';
    }
}
