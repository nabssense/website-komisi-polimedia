<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class DnsRecord implements Rule
{
    public function passes($attribute, $value)
    {
        // Extract domain from email address
        $domain = substr(strrchr($value, "@"), 1);

        // Check if domain has valid DNS MX records
        return checkdnsrr($domain, 'MX');
    }

    public function message()
    {
        return 'The email domain does not have valid DNS MX records.';
    }
}
