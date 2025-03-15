<?php

namespace App\Recursions;

class PalindromeRecursion
{
    function isPalindrome($i, $s) { // Removed &
        if ($i >= strlen($s) / 2) return true;
        if ($s[$i] != $s[strlen($s) - $i - 1]) return false;
        return $this->isPalindrome($i + 1, $s);
    }
}

