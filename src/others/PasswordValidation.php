<?php
namespace App;

class PasswordValidation
{

    public function check($str)
    {

        if (strlen($str) >= 8) {

            $upper = preg_match('/[A-Z]/', $str);

            $lower = preg_match('/[a-z]/', $str);

            $num = preg_match('/[0-9]/', $str);

            return $upper && $lower && $num;
        }

        return false;

    }
}
