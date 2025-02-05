<?php

namespace App;

class PlainTheArray{

    public function do($arr){

        $temp = [];

        for($i = 0; $i< count($arr); $i++){

            for($j = 0; $j<count($arr[$i]);$j++){

                $temp[] = $arr[$i][$j];
            }
        }

        return $temp;
    }
}