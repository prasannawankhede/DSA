<?php

namespace App;

class SecondLargestElementArray
{
    public function search($arr)
    {
        if (count($arr) < 2) {
            return null;
        }

        $largest = $arr[0];
        $secondLargest = PHP_INT_MIN;

        for ($i = 1; $i < count($arr); $i++) {
            if ($arr[$i] > $largest) {
                $secondLargest = $largest;
                $largest = $arr[$i];
            } elseif ($arr[$i] < $largest && $arr[$i] > $secondLargest) {
                $secondLargest = $arr[$i];
            }
        }

        return $secondLargest === PHP_INT_MIN ? null : $secondLargest;
    }
}
