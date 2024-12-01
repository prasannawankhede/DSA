<?php

namespace App;

class LeftRotateArrayNPlaces
{
    public function rotate($arr, $n)
    {
        $temp = [];
        $length = count($arr);

        if ($length == 0 || $n % $length == 0) {
            return $arr;
        }

        $n = $n % $length;

        for ($i = 0; $i < $n; $i++) {
            $temp[] = $arr[$i];
        }

        for ($i = $n; $i < $length; $i++) {
            $arr[$i - $n] = $arr[$i];
        }

        for ($i = 0; $i < $n; $i++) {
            $arr[$length - $n + $i] = $temp[$i];
        }

        return $arr;
    }
}
