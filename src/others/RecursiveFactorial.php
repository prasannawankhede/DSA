<?php

namespace App;

class RecursiveFactorial{

    public function recursiveFact($n){

        if ($n < 0) {
            throw new \InvalidArgumentException("Factorial is not defined for negative numbers.");
        }
        
        if($n ===0){
            return 1;
        }

        return $n * $this->recursiveFact($n - 1);

    }
}