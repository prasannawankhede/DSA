<?php

use PHPUnit\Framework\TestCase;
use App\palindrome;

class PalindromeTest extends TestCase
{
    #[\PHPUnit\Framework\Attributes\Test]
    public function it_checks_if_string_is_palindrome()
    {
        $palindrome = new palindrome();

        // Test with a palindrome string
        $this->assertTrue($palindrome->check('madam'));

        // Test with a non-palindrome string
        $this->assertFalse($palindrome->check('hello'));

        // Test with a single character string
        $this->assertTrue($palindrome->check('a'));

        // Test with an empty string
        $this->assertTrue($palindrome->check(''));

        // Test with a mixed-case string
        $this->assertFalse($palindrome->check('Madam')); // Case-sensitive check

        // Test with spaces (space-sensitive check)
        $this->assertFalse($palindrome->check('race car'));
    }
}
