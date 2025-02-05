<?php

namespace App;

class DiceGame{

    public function roll($num){
        
        $arr = [];
        $sum = 0;

        for($i = 0; $i< $num; $i++){

            $dice1 = rand(1,6);
            $dice2 = rand(1,6);

            $sum = $dice1 + $dice2;

            if($sum == 7 || $sum ==11){

                $result  = "win";
            }
            elseif ($sum == 2 || $sum == 3 || $sum == 12) {

                $result  = "loose";
            }
            else {
                
                $result = "roll again";
            }

            $arr[] = [
                "dice1" => $dice1,
                "dice2" => $dice2,
                "sum" => $sum,
                "result" => $result,
            ];


        }

        return $arr;
    }
}