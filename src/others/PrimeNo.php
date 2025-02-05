<?php

namespace App;

class PrimeNo{

    public function find($n){
        if($n < 2){
            return false;
        }
        //u can also write math.sqrt(n) instead of just n
        for($i=2;$i<$n;$i++){

            if($n%$i ===0){
                return false;
            }
        }

        return true;
    }
}