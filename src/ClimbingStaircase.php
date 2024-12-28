<?php

namespace App;

class ClimbingStaircase{

    public function find($n){

        $noOfWays = [1,2];

        for($i = 2 ; $i<=$n ; $i++){
            $noOfWays[$i] = $noOfWays[$i -1] + $noOfWays[$i - 2];
            
        }

        return $noOfWays[$n - 1];
    }
}