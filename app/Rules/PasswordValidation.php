<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class PasswordValidation implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $messages = "";
        if(strlen($value) < 8){
            $messages .= "Password must be at least 8 chars \n";
        }
        if(!preg_match("/[0-9]/", $value)){
            $messages .= "Password must include number \n";
        }
        if(!preg_match("/[a-z]/", $value)){
            $messages .= "Password must include lowercase \n";
        }
        if(!preg_match("/[A-Z]/", $value)){
            $messages .= "Password must include uppercase \n";
        }
        if(!preg_match("/[^a-zA-Z0-9]/", $value)){
            $messages .= "Password must include symbol \n";
        }

        if($messages != ""){
            $fail($messages);
        }
        
    }
}
