<?php

namespace Tests\arrayProblems;

use PHPUnit\Framework\TestCase;
use App\arrayProblems\TwoSum;

class TwoSumTest extends TestCase {

    public function testSumFound() {
        $obj = new TwoSum();
        $arr = [2, 7, 11, 15];
        $result = $obj->sum($arr, 9);
        $this->assertEquals([0, 1], $result);
    }
    
    public function testSumNotFound() {
        $obj = new TwoSum();
        $arr = [1, 2, 3, 4];
        $result = $obj->sum($arr, 100);
        $this->assertEquals(-1, $result);
    }
    
    public function testSumWithDuplicates() {
        $obj = new TwoSum();
        // In this array, the first valid pair encountered will be [0,1] (2 + 4 = 6)
        $arr = [2, 4, 4, 1];
        $result = $obj->sum($arr, 6);
        $this->assertEquals([0, 1], $result);
    }
    
    public function testSumWithNegativeNumbers() {
        $obj = new TwoSum();
        $arr = [-3, 4, 3, 90];
        $result = $obj->sum($arr, 0);
        // Expected: -3 + 3 = 0, so indices [0,2]
        $this->assertEquals([0, 2], $result);
    }
    
    public function testSingleElementArray() {
        $obj = new TwoSum();
        $arr = [5];
        $result = $obj->sum($arr, 5);
        $this->assertEquals(-1, $result);
    }
    
    /**
     * Test case that accepts multiple valid answers.
     *
     * In this example, multiple pairs could sum to the target.
     * Depending on the iteration order, a valid answer could be [0,1] or [0,3] or [2,3].
     * Our current algorithm will return the first valid pair it encounters.
     */
    public function testMultipleValidAnswers() {
        $obj = new TwoSum();
        // This array is set up so that there are multiple pairs that sum to 7.
        // Possible valid pairs (with indices, assuming j > i) are:
        //   - When i=0: if arr[0] = 3 and arr[?]=4, or
        //   - When i=2: if arr[2] = 3 and arr[3] = 4.
        // We will accept either [0,1] or [2,3] as valid.
        $arr = [3, 4, 3, 4];
        $result = $obj->sum($arr, 7);
        $validAnswers = [
            [0, 1],
            [2, 3]
        ];
        // Assert that the result is one of the valid pairs.
        $this->assertContains($result, $validAnswers);
    }
}
