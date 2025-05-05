<?php
namespace App\SlidingWindow;

class MaxSumSubarray
{
    public function maxSum($arr, $k)
    {
        $n      = count($arr);
        $i      = 0;
        $j      = 0;
        $sum    = 0;
        $maxSum = PHP_INT_MIN;

        while ($j < $n) {
            $sum += $arr[$j];

            if ($j - $i + 1 < $k) {
                $j++;
            } else if ($j - $i + 1 === $k) {
                $maxSum = max($maxSum, $sum);
                $sum -= $arr[$i];
                $j++;
                $i++;
            }
        }

        return $maxSum === PHP_INT_MIN ? 0 : $maxSum;
    }
}
