<?php

namespace App;

class FindTheMissingNumber{

    public function find($arr){

        $count = count($arr);

        $arrSum = 0;

        for($i = 0; $i< $count; $i++){

            $arrSum = $arrSum + $arr[$i];
        }

        $sumOfNatural = 0;

        for($j = 1; $j <= $count + 1; $j++){

            $sumOfNatural = $sumOfNatural + $j;
        }

        return $sumOfNatural - $arrSum;


    }
}