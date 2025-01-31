<?php

use PHPUnit\Framework\TestCase;
use App\LongestConsecutiveSequenceFinder;

class LongestConsecutiveSequenceFinderTest extends TestCase
{
    private $finder;

    protected function setUp(): void
    {
        $this->finder = new LongestConsecutiveSequenceFinder();
    }

    public function testLongestConsecutiveSequenceWithNormalCase()
    {
        $input = [100, 4, 200, 1, 3, 2];
        $expected = 4; // [1, 2, 3, 4]
        $result = $this->finder->longestConsecutiveSequence($input);

        $this->assertEquals($expected, $result);
    }

    public function testLongestConsecutiveSequenceWithDuplicates()
    {
        $input = [1, 2, 2, 3, 4];
        $expected = 4; // [1, 2, 3, 4]
        $result = $this->finder->longestConsecutiveSequence($input);

        $this->assertEquals($expected, $result);
    }

    public function testLongestConsecutiveSequenceWithSingleElement()
    {
        $input = [5];
        $expected = 1; // Only one element
        $result = $this->finder->longestConsecutiveSequence($input);

        $this->assertEquals($expected, $result);
    }

    public function testLongestConsecutiveSequenceWithNoSequence()
    {
        $input = [10, 20, 30, 40];
        $expected = 1; // No consecutive numbers
        $result = $this->finder->longestConsecutiveSequence($input);

        $this->assertEquals($expected, $result);
    }

    public function testLongestConsecutiveSequenceWithNegativeNumbers()
    {
        $input = [-3, -2, -1, 0, 1];
        $expected = 5; // [-3, -2, -1, 0, 1]
        $result = $this->finder->longestConsecutiveSequence($input);

        $this->assertEquals($expected, $result);
    }
}
