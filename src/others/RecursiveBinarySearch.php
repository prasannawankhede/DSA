<?php

namespace App;

class RecursiveBinarySearch{

    public function recursiveBinary($arr, $target){

        return $this->search($arr, $target, 0,count($arr)- 1);

    }

    public function search($arr, $target,$left,$right){

        if($left > $right){
            return -1;
        }

        $mid = floor(($left + $right)/2);

        if($target == $arr[$mid]){

            return $mid;
        }

        if($target < $arr[$mid]){
            return $this->search($arr,$target,$left,$mid-1);
        }
        else{
            return $this->search($arr,$target,$mid+1,$right);
        }

    }
}
