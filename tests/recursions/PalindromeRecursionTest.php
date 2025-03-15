<?php

namespace Tests\Recursions;

use PHPUnit\Framework\TestCase;
use App\Recursions\PalindromeRecursion;

class PalindromeRecursionTest extends TestCase
{
    public function testPalindrome()
    {
        $palindrome = new PalindromeRecursion();
        
        $this->assertTrue($palindrome->isPalindrome(0, $str = "madam"));
        $this->assertTrue($palindrome->isPalindrome(0, $str = "racecar"));
        $this->assertFalse($palindrome->isPalindrome(0, $str = "hello"));
        $this->assertTrue($palindrome->isPalindrome(0, $str = "")); // Edge case: empty string
        $this->assertTrue($palindrome->isPalindrome(0, $str = "a")); // Edge case: single character
    }
}
