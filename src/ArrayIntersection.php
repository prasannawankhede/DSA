<?php

namespace App;

class ArrayIntersection {

    public function find($arr1, $arr2) {
        $temp = [];

        for ($i = 0; $i < count($arr1); $i++) {

            for ($j = 0; $j < count($arr2); $j++) {
                if ($arr1[$i] === $arr2[$j] && !in_array($arr1[$i], $temp)) {
                    $temp[] = $arr1[$i];
                    break; 
                }
            }
        }

        return $temp;
    }
}
