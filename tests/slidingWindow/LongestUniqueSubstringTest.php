<?php
use App\SlidingWindow\LongestUniqueSubstring;
use PHPUnit\Framework\TestCase;

class LongestUniqueSubstringTest extends TestCase
{
    public function testLengthOfLongestSubstring()
    {
        $longestUnique = new LongestUniqueSubstring();

        $this->assertEquals(3, $longestUnique->lengthOfLongestSubstring('abcabcbb'));
        $this->assertEquals(1, $longestUnique->lengthOfLongestSubstring('bbbbb'));
        $this->assertEquals(3, $longestUnique->lengthOfLongestSubstring('pwwkew'));
        $this->assertEquals(0, $longestUnique->lengthOfLongestSubstring(''));
        $this->assertEquals(5, $longestUnique->lengthOfLongestSubstring('abcde'));
        $this->assertEquals(2, $longestUnique->lengthOfLongestSubstring('aab'));
        $this->assertEquals(3, $longestUnique->lengthOfLongestSubstring('dvdf'));
    }
}
