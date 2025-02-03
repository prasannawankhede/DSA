<?php

use PHPUnit\Framework\TestCase;
use App\LongestPalindromeFinder;

class LongestPalindromeFinderTest extends TestCase
{
    private $finder;

    protected function setUp(): void
    {
        $this->finder = new LongestPalindromeFinder();
    }

    public function testFindLongestPalindromeWithOddLengthPalindrome()
    {
        $input = "babad";
        $expected = "bab"; // "aba" is also a valid answer
        $this->assertContains($this->finder->findLongestPalindrome($input), ["bab", "aba"]);
    }

    public function testFindLongestPalindromeWithEvenLengthPalindrome()
    {
        $input = "cbbd";
        $expected = "bb";
        $this->assertEquals($expected, $this->finder->findLongestPalindrome($input));
    }

    public function testFindLongestPalindromeWithSingleCharacter()
    {
        $input = "a";
        $expected = "a";
        $this->assertEquals($expected, $this->finder->findLongestPalindrome($input));
    }

    public function testFindLongestPalindromeWithAllUniqueCharacters()
    {
        $input = "abcde";
        $this->assertContains($this->finder->findLongestPalindrome($input), ["a", "b", "c", "d", "e"]);
    }

    public function testFindLongestPalindromeWithFullPalindrome()
    {
        $input = "racecar";
        $expected = "racecar";
        $this->assertEquals($expected, $this->finder->findLongestPalindrome($input));
    }
}
