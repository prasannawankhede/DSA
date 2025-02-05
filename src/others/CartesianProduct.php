<?php

namespace App;

class CartesianProduct{

    public function find($arr1, $arr2){

        $result = [];

        for( $i = 0; $i < count($arr1);$i++){
            for( $j = 0; $j < count($arr2); $j++){
                $result[] = [$arr1[$i], $arr2[$j]];


            }
        }

        return $result;
    }
}