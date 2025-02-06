<?php

use PHPUnit\Framework\TestCase;
use App\others\LongestUniqueSubstringFinder;

class LongestUniqueSubstringFinderTest extends TestCase
{
    private $finder;

    protected function setUp(): void
    {
        $this->finder = new LongestUniqueSubstringFinder();
    }

    public function testLengthOfLongestSubstringWithRepeatingCharacters()
    {
        $input = "abcabcbb";
        $expected = 3; // "abc"
        $this->assertEquals($expected, $this->finder->lengthOfLongestSubstring($input));
    }

    public function testLengthOfLongestSubstringWithAllSameCharacters()
    {
        $input = "bbbbb";
        $expected = 1; // "b"
        $this->assertEquals($expected, $this->finder->lengthOfLongestSubstring($input));
    }

    public function testLengthOfLongestSubstringWithMixedCharacters()
    {
        $input = "pwwkew";
        $expected = 3; // "wke"
        $this->assertEquals($expected, $this->finder->lengthOfLongestSubstring($input));
    }

    public function testLengthOfLongestSubstringWithEmptyString()
    {
        $input = "";
        $expected = 0;
        $this->assertEquals($expected, $this->finder->lengthOfLongestSubstring($input));
    }

    public function testLengthOfLongestSubstringWithSingleCharacter()
    {
        $input = "z";
        $expected = 1;
        $this->assertEquals($expected, $this->finder->lengthOfLongestSubstring($input));
    }

    public function testLengthOfLongestSubstringWithLongUniqueString()
    {
        $input = "abcdefg";
        $expected = 7;
        $this->assertEquals($expected, $this->finder->lengthOfLongestSubstring($input));
    }
}
