<?php

namespace App;

class LeftRotateArrayOnePlace{

    public function rotate($arr){
        $temp = $arr[0];

        for ($i=1;$i<count($arr);$i++){
            $arr[$i-1] = $arr[$i];
        }
        $arr[count($arr)-1] = $temp;
        return $arr;
    }
}