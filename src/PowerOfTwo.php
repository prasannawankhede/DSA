<?php

namespace App;

class PowerOfTwo{

    public function find($n){

        if($n<1){
            return false;
        }

        while($n>1){
            if($n % 2 !==0){
                return false;
            }
            $n=$n/2;
        }
        return true;
    }
}