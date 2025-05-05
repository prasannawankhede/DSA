<?php
namespace App\SlidingWindow;

class MinSumSubarray
{
    public function minSum($arr, $k)
    {
        $n      = count($arr);
        $i      = 0;
        $j      = 0;
        $sum    = 0;
        $minSum = PHP_INT_MAX;

        while ($j < $n) {
            $sum += $arr[$j];

            if ($j - $i + 1 < $k) {
                $j++;
            } else if ($j - $i + 1 === $k) {
                $minSum = min($minSum, $sum);
                $sum -= $arr[$i];
                $j++;
                $i++;
            }
        }

        return $minSum === PHP_INT_MAX ? 0 : $minSum;
    }
}
