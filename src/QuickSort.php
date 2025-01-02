<?php

namespace App;

class QuickSort{

    public function sort($arr){

        if(count($arr) < 2){
            return $arr;
        }

        $pivot = $arr[count($arr)-1];
        $left = [];
        $right = [];

        for($i=0; $i<count($arr)-1;$i++){
            if($arr[$i] < $pivot){
                $left[] = $arr[$i];
            }
            else{
                $right[] = $arr[$i];

            }
        }
        return  array_merge($this->sort($left),[$pivot],$this->sort($right));
    }
}