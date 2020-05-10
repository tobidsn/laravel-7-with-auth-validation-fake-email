<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Str;
use App\DisposableDomain;

class FakeEmail implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $email = filter_var($value, FILTER_VALIDATE_EMAIL);
        if ($email) {
            $domain = Str::after($email, '@');

            $exist = DisposableDomain::where('domain', $domain)->first();
            return $exist ? false : true;
        }

        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute must be a valid, non-disposable domain';
    }
}
