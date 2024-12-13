<?php

namespace App;

class LongestSubArrayWithSumK
{
    public function find($arr, $k)
    {
        $left = 0;
        $right = 0;
        $n = count($arr);
        $maxLen = 0;
        $sum = 0;

        while ($right < $n) {
            $sum += $arr[$right];

            // Shrink the window until the sum <= k
            while ($sum > $k && $left <= $right) {
                $sum -= $arr[$left];
                $left++;
            }

            // Check if the current sum equals k
            if ($sum == $k) {
                $maxLen = max($maxLen, $right - $left + 1);
            }

            // If single element is k, consider it
            if ($arr[$right] == $k) {
                $maxLen = max($maxLen, 1);
            }

            $right++;
        }

        return $maxLen;
    }
}
