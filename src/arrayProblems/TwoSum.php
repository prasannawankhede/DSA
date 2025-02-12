<?php

namespace App\arrayProblems;

class TwoSum
{
    public function sum($arr, $target)
    {
        $n = count($arr);

        if ($n < 2) {
            return -1;
        }

        // Traverse each unique pair (i, j) with j > i.
        for ($i = 0; $i < $n; $i++) {
            for ($j = $i + 1; $j < $n; $j++) {
                if ($arr[$i] + $arr[$j] == $target) {
                    // Return the first valid pair as a flat array.
                    return [$i, $j];
                }
            }
        }

        // If no pair is found, return -1.
        return -1;
    }
}