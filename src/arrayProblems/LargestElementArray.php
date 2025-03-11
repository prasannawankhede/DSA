<?php

namespace App\ArrayProblems;

class LargestElementArray{

    public function find(array $arr):int|float|null
    {

        if(empty($arr)){
            return null;
        }
        $max = $arr[0];

        for($i = 1; $i < count($arr); $i++){
            if($arr[$i] > $max){
                $max = $arr[$i];
            }
        }

        return $max;
    }
}