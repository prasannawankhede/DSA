<?php

namespace App;

class InsertionSort{

    public function sort($arr){

        for($i=1; $i<count($arr); $i++){

            $temp = $arr[$i];
            $j = $i - 1;

            while($j >=0 && $arr[$j] > $temp){

                $arr[$j + 1] = $arr[$j];
                $j--;

            }
            $arr[$j + 1] = $temp;
        }
        return $arr;

    }
}