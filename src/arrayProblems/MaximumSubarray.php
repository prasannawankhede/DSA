<?php
namespace App\arrayProblems;

class MaximumSubarray
{

    public function max(array $arr): int
    {
        if (count($arr) === 0) {

            return 0;

        }
        $currentSum = $arr[0];
        $maxsum     = $arr[0];
        $temp       = 0;

        for ($i = 1; $i < count($arr); $i++) {

            $temp = $currentSum + $arr[$i];

            if ($arr[$i] > $temp) {
                $currentSum = $arr[$i];
            } else {
                $currentSum = $temp;
            }

            if ($currentSum > $maxsum) {
                $maxsum = $currentSum;
            }
        }
        return $maxsum;

    }
}
