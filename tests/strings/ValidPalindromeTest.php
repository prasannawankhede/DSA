<?php

use PHPUnit\Framework\TestCase;
use App\Strings\ValidPalindrome; // Ensure this matches the class namespace

class ValidPalindromeTest extends TestCase {

    public function testCheck() {
        $palindromeChecker = new ValidPalindrome();

        $this->assertTrue($palindromeChecker->check("madam"));
        $this->assertTrue($palindromeChecker->check("abba"));
        $this->assertFalse($palindromeChecker->check("hello"));
        $this->assertTrue($palindromeChecker->check(""));  // Edge case
    }
}
