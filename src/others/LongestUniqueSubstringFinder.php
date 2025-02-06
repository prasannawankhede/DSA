<?php

namespace App\others;

class LongestUniqueSubstringFinder {

    /**
     * Finds the length of the longest substring without repeating characters.
     *
     * @param string $s
     * @return int
     */
    public function lengthOfLongestSubstring(string $s): int {
        $charIndex = [];
        $maxLength = 0;
        $left = 0;

        for ($right = 0; $right < strlen($s); $right++) {
            $char = $s[$right];

            if (isset($charIndex[$char]) && $charIndex[$char] >= $left) {
                $left = $charIndex[$char] + 1;
            }

            $charIndex[$char] = $right;
            $maxLength = max($maxLength, $right - $left + 1);
        }

        return $maxLength;
    }
}
