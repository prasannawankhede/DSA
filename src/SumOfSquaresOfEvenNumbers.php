<?php

namespace App;

class SumOfSquaresOfEvenNumbers{

    public function add($arr){

        $sum = 0;

        foreach($arr as $num){

            if($num % 2 == 0){

                $sum = $sum + ($num * $num);
            }

        }

        return $sum;
    }
}