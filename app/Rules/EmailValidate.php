<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class EmailValidate implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $pattern = "/^[_0-9a-zA-Z]+[\.\-\d\w]*@[0-9a-zA-Z]+[\.\-\d\w]*\.[0-9a-zA-Z\.]{2,}$/iu";
        if(!preg_match($pattern, $value)){
            $fail("Invalid the format of your email.");
        }
    }
}
