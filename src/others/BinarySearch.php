<?php

namespace App;

class BinarySearch{

    public function search($arr, $target){

        $left = 0;
        $right = count($arr) - 1;

        while($left <= $right){

            $mid = floor(($left + $right) / 2);

            if($arr[$mid] == $target){
                // also consider for duplicates in array  $right = $mid - 1;

                return $mid;
            }

            if($target < $arr[$mid]){

                $right = $mid -1;
            }
            else{
                $left = $mid + 1;
            }


        }

        return -1;

    }
}