<?php

namespace App;

class LongestPalindromeFinder {

    /**
     * Finds the longest palindromic substring in a given string.
     *
     * @param string $s
     * @return string
     */
    public function findLongestPalindrome($s) {
        if (strlen($s) < 2) {
            return $s;
        }

        $start = 0;
        $maxLength = 1;

        for ($i = 0; $i < strlen($s); $i++) {
            // Expand around center for odd-length palindromes
            list($left1, $right1) = $this->expandAroundCenter($s, $i, $i);
            // Expand around center for even-length palindromes
            list($left2, $right2) = $this->expandAroundCenter($s, $i, $i + 1);

            if ($right1 - $left1 + 1 > $maxLength) {
                $start = $left1;
                $maxLength = $right1 - $left1 + 1;
            }
            if ($right2 - $left2 + 1 > $maxLength) {
                $start = $left2;
                $maxLength = $right2 - $left2 + 1;
            }
        }

        return substr($s, $start, $maxLength);
    }

    /**
     * Expands around the center and returns the longest palindrome indices.
     *
     * @param string $s
     * @param int $left
     * @param int $right
     * @return array
     */
    private function expandAroundCenter($s, $left, $right) {
        while ($left >= 0 && $right < strlen($s) && $s[$left] === $s[$right]) {
            $left--;
            $right++;
        }
        return [$left + 1, $right - 1];
    }
}
