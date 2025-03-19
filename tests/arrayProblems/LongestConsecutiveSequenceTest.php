<?php
namespace Tests\ArrayProblems;

use PHPUnit\Framework\TestCase;
use App\ArrayProblems\LongestConsecutiveSequence;

class LongestConsecutiveSequenceTest extends TestCase
{
    public function testFindLongestSequence()
    {
        $obj = new LongestConsecutiveSequence();

        // Test Case 1: General case with a mix of numbers
        $arr = [100, 200, 1, 2, 3, 4];
        $this->assertEquals(4, $obj->findLongestSequence($arr));

        // Test Case 2: Array with no consecutive elements
        $arr = [10, 5, 15];
        $this->assertEquals(1, $obj->findLongestSequence($arr));

        // Test Case 3: Array with all consecutive elements
        $arr = [1, 2, 3, 4, 5];
        $this->assertEquals(5, $obj->findLongestSequence($arr));

        // Test Case 4: Array with duplicates
        $arr = [1, 2, 2, 3];
        $this->assertEquals(3, $obj->findLongestSequence($arr));

        // Test Case 5: Empty array
        $arr = [];
        $this->assertEquals(0, $obj->findLongestSequence($arr));
    }
}
