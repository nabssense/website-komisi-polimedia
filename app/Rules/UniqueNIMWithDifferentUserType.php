<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\User;

class UniqueNIMWithDifferentUserType implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $userType = request()->input('user_type');
        $existingUser = User::where('nim', $value)->where('user_type', '!=', $userType)->first();
        
        return $existingUser ? false : true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'NIM must be unique for different user types.';
    }
}
