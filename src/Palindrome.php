<?php

namespace App;

class palindrome{

    public function check($string){

        $temp = "";

            for ($i = strlen($string) - 1; $i >= 0; $i--) {


            $temp .= $string[$i];

        }
        if($string == $temp){
            return true;
        }
        else{
            return false;
        }

    }
}