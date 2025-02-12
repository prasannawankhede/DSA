<?php

namespace Tests\arrayProblems;

use PHPUnit\Framework\TestCase;
use App\arrayProblems\TwoSum;

class TwoSumTest extends TestCase {

    // Test when a valid pair is found.
    public function testSumFound() {
        $obj = new TwoSum();
        $arr = [2, 7, 11, 15];
        $result = $obj->sum($arr, 9);
        $this->assertEquals([0, 1], $result);
    }
    
    // Test when no valid pair is found.
    public function testSumNotFound() {
        $obj = new TwoSum();
        $arr = [1, 2, 3, 4];
        $result = $obj->sum($arr, 100);
        $this->assertEquals(-1, $result);
    }
    
    // Test with duplicate numbers.
    public function testSumWithDuplicates() {
        $obj = new TwoSum();
        // There are two pairs that sum to 6: (2,4) and (4,2), but our method should return the first encountered pair.
        $arr = [2, 4, 4, 1];
        $result = $obj->sum($arr, 6);
        // Since the inner loop starts at $i+1, the first valid pair is [0,1] (2+4=6).
        $this->assertEquals([0, 1], $result);
    }
    
    // Test with negative numbers.
    public function testSumWithNegativeNumbers() {
        $obj = new TwoSum();
        $arr = [-3, 4, 3, 90];
        $result = $obj->sum($arr, 0);
        // -3 + 3 = 0, so expected indices are [0, 2]
        $this->assertEquals([0, 2], $result);
    }
    
    // Test with an array of length less than 2.
    public function testSingleElementArray() {
        $obj = new TwoSum();
        $arr = [5];
        $result = $obj->sum($arr, 5);
        $this->assertEquals(-1, $result);
    }
}
