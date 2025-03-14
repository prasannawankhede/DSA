<?php

namespace App\Recursions;

class FunctionalSumofN{

    public function sum($n){

        if($n === 0) return 0;

        return $n + $this->sum($n - 1);        
        
    }
}