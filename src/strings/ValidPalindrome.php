<?php

namespace App\Strings; // Ensure namespace matches folder structure

class ValidPalindrome {

    public function check(string $s): bool {
        $left = 0;
        $right = strlen($s) - 1;

        while ($left < $right) {
            if ($s[$left] !== $s[$right]) {
                return false;
            }
            $left++;
            $right--;
        }

        return true;
    }
}
