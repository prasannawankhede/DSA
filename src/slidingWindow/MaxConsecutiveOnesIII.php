<?php
namespace App\SlidingWindow;

class MaxConsecutiveOnesIII
{
    public function find($arr, $k): int
    {
        $l      = 0;
        $maxLen = 0;
        $zero   = 0;

        for ($r = 0; $r < count($arr); $r++) {
            if ($arr[$r] === 0) {
                $zero++;
            }

            while ($zero > $k) {
                if ($arr[$l] === 0) {
                    $zero--;
                }
                $l++;
            }

            $maxLen = max($maxLen, $r - $l + 1);
        }

        return $maxLen;
    }
}
