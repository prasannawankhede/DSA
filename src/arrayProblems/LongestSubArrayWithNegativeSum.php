<?php

namespace App\ArrayProblems;

class LongestSubArrayWithNegativeSum
{
    public function getLongestSubarray($arr, $k)
    {
        $n = count($arr);
        $maxLength = 0;

        for ($i = 0; $i < $n; $i++) {
            $sum = 0;

            for ($j = $i; $j < $n; $j++) {
                $sum += $arr[$j];

                if ($sum === $k) {
                    $maxLength = max($maxLength, $j - $i + 1);
                }
            }
        }

        return $maxLength;
    }
}
