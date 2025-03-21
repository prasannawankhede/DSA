<?php

use PHPUnit\Framework\TestCase;
use App\Algorithms\SelectionSort;

class SelectionSortTest extends TestCase
{
    public function testSort()
    {
        $selectionSort = new SelectionSort();

        // Test case 1: Unsorted array
        $arr = [13, 46, 24, 52, 20, 9];
        $expected = [9, 13, 20, 24, 46, 52];
        $this->assertEquals($expected, $selectionSort->sort($arr));

        // Test case 2: Already sorted array
        $arr = [1, 2, 3, 4, 5];
        $expected = [1, 2, 3, 4, 5];
        $this->assertEquals($expected, $selectionSort->sort($arr));

        // Test case 3: Reverse sorted array
        $arr = [5, 4, 3, 2, 1];
        $expected = [1, 2, 3, 4, 5];
        $this->assertEquals($expected, $selectionSort->sort($arr));

        // Test case 4: Array with duplicate values
        $arr = [4, 2, 2, 8, 3, 3, 1];
        $expected = [1, 2, 2, 3, 3, 4, 8];
        $this->assertEquals($expected, $selectionSort->sort($arr));

        // Test case 5: Empty array
        $arr = [];
        $expected = [];
        $this->assertEquals($expected, $selectionSort->sort($arr));

        // Test case 6: Single-element array
        $arr = [42];
        $expected = [42];
        $this->assertEquals($expected, $selectionSort->sort($arr));
    }
}
