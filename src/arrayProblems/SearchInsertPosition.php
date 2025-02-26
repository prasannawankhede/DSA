<?php

namespace App\ArrayProblems;

class SearchInsertPosition{

    public function search(array $arr,int $target):int{

        for($i = 0; $i < count($arr); $i++){

            if($arr[$i] === $target){
                return $i;
            }
            if($target < $arr[$i] ){

                return $i;

            }
        }
        return count($arr);
    }
}