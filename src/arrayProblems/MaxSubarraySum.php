<?php

namespace App\ArrayProblems;

class MaxSubarraySum
{
    public function findMaxSubarraySum($arr)
    {
        $n = count($arr);
        $maxSum = PHP_INT_MIN;
        $currentSum = 0;

        for ($i = 0; $i < $n; $i++) {
            $currentSum += $arr[$i];

            if ($currentSum > $maxSum) {
                $maxSum = $currentSum;
            }

            // If currentSum becomes negative, reset it to 0
            if ($currentSum < 0) {
                $currentSum = 0;
            }
        }

        return $maxSum;
    }
}
