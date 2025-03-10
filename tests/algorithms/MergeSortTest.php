<?php

namespace Tests\Algorithms;

use PHPUnit\Framework\TestCase;
use App\Algorithms\MergeSort;

class MergeSortTest extends TestCase {
    
    public function testSort(): void {
        $mergeSort = new MergeSort();
        
        // Test case 1: Unsorted array
        $arr = [9, 4, 7, 6, 3, 1, 5];
        $mergeSort->sort($arr, 0, count($arr) - 1);
        $this->assertEquals([1, 3, 4, 5, 6, 7, 9], $arr);
        
        // Test case 2: Already sorted array
        $arr = [1, 2, 3, 4, 5];
        $mergeSort->sort($arr, 0, count($arr) - 1);
        $this->assertEquals([1, 2, 3, 4, 5], $arr);
        
        // Test case 3: Reverse sorted array
        $arr = [5, 4, 3, 2, 1];
        $mergeSort->sort($arr, 0, count($arr) - 1);
        $this->assertEquals([1, 2, 3, 4, 5], $arr);
        
        // Test case 4: Array with duplicate elements
        $arr = [4, 2, 2, 8, 3, 3, 1];
        $mergeSort->sort($arr, 0, count($arr) - 1);
        $this->assertEquals([1, 2, 2, 3, 3, 4, 8], $arr);
        
        // Test case 5: Empty array
        $arr = [];
        $mergeSort->sort($arr, 0, count($arr) - 1);
        $this->assertEquals([], $arr);
    }
}
