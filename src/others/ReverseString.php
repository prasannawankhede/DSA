<?php

namespace App;

class ReverseString{

    public function reverse($string){

        $temp = "";

            for ($i = strlen($string) - 1; $i >= 0; $i--) {


            $temp .= $string[$i];
        }
        return $temp;
    }
}