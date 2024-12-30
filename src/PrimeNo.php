<?php

namespace App;

class PrimeNo{

    public function find($n){
        if($n < 2){
            return false;
        }

        for($i=2;$i<$n;$i++){

            if($n%$i ===0){
                return false;
            }
        }

        return true;
    }
}