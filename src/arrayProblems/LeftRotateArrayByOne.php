<?php

namespace App\ArrayProblems;

class LeftRotateArrayByOne{

    public function rotate(array &$arr,int $n){

        if($n < 1){
            return null;
        }

        $temp = $arr[0];

        for($i = 1; $i < $n ; $i++){

            $arr[$i - 1] = $arr[$i];

        }

        $arr[$n - 1] = $temp;
    }
}