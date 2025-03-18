<?php
namespace App\ArrayProblems;

class TwoSumOptimalApproach
{

    public function isTwoSum($n, $arr, $target)
    {
        sort($arr);

        $left  = 0;
        $right = $n - 1;

        while ($left < $right) {
            $currentSum = $arr[$left] + $arr[$right];

            if ($currentSum === $target) {
                return true;
            } elseif ($currentSum < $target) {
                $left++;
            } else {
                $right--;
            }
        }

        return false;
    }
}
