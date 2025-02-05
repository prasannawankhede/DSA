<?php

namespace App;

class ValidIPv4Addresses{

    public function check($str){

        $values = explode(".",$str);

        if(count($values) !== 4){
            return false;
        }

        foreach($values as $value){

            if(!is_numeric($value) || $value < 0 || $value >255){
                return false;
            }

            if(strlen($value) > 1 && $value[0] == "0"){
                return false;
            }
        }

        return true;
    }
}