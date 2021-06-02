<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ContainSpecialCharacter implements Rule
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
        $specialCharacters = array('~','!','#','$','%','^','&','*','(',')','_','+','@','|','/','<','>','[',']','{','}',':','?','-',';');
        for($i=0; $i<strlen($value); $i++)
        {
            if(in_array($value[$i],$specialCharacters))
                return true;
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
        return 'The password must contain at least one special character.';
    }
}
