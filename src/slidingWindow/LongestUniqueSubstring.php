<?php
namespace App\SlidingWindow;

class LongestUniqueSubstring
{
    public function lengthOfLongestSubstring($s)
    {
        $n       = strlen($s);
        $i       = 0;
        $j       = 0;
        $maxLen  = 0;
        $charSet = [];

        while ($j < $n) {

            if (! isset($charSet[$s[$j]])) {
                $charSet[$s[$j]] = true;
                $maxLen          = max($maxLen, $j - $i + 1);
                $j++;
            } else {
                unset($charSet[$s[$i]]);
                $i++;
            }
        }
        return $maxLen;
    }
}
