<?php

namespace App;

class SumProblem
{
    public function find($arr, $k)
    {
        sort($arr); // Ensure the array is sorted
        $left = 0;
        $right = count($arr) - 1;

        while ($left < $right) {
            $sum = $arr[$left] + $arr[$right];

            if ($sum == $k) {
                return "yes";
            } elseif ($sum < $k) {
                $left++;
            } else {
                $right--; // Correct this line
            }
        }

        return "no";
    }
}
