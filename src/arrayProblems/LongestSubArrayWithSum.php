<?php

namespace App\ArrayProblems;

class LongestSubArrayWithSum
{
    public function subArray($arr, $k)
    {
        if (empty($arr)) {
            return 0;
        }

        $left = 0;
        $sum = 0;
        $maxLength = 0;

        for ($right = 0; $right < count($arr); $right++) {
            $sum += $arr[$right];

            // Adjust the window carefully for negative numbers
            while ($left <= $right && $sum > $k) {
                $sum -= $arr[$left];
                $left++;
            }

            // Check if we found a subarray with the required sum
            if ($sum === $k) {
                $maxLength = max($maxLength, $right - $left + 1);
            }
        }

        return $maxLength;
    }
}
