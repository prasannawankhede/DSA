<?php

use PHPUnit\Framework\TestCase;
use App\InsertionSort;

class InsertionSortTest extends TestCase
{
    public function testEmptyArray()
    {
        $sorter = new InsertionSort();
        $result = $sorter->sort([]);
        $this->assertEquals([], $result, "Empty array should return an empty array.");
    }

    public function testSingleElementArray()
    {
        $sorter = new InsertionSort();
        $result = $sorter->sort([1]);
        $this->assertEquals([1], $result, "Array with one element should remain unchanged.");
    }

    public function testAlreadySortedArray()
    {
        $sorter = new InsertionSort();
        $result = $sorter->sort([1, 2, 3, 4, 5]);
        $this->assertEquals([1, 2, 3, 4, 5], $result, "Already sorted array should remain unchanged.");
    }

    public function testReverseSortedArray()
    {
        $sorter = new InsertionSort();
        $result = $sorter->sort([5, 4, 3, 2, 1]);
        $this->assertEquals([1, 2, 3, 4, 5], $result, "Reverse sorted array should be sorted correctly.");
    }

    public function testUnsortedArray()
    {
        $sorter = new InsertionSort();
        $result = $sorter->sort([64, 34, 25, 12, 22, 11, 90]);
        $this->assertEquals([11, 12, 22, 25, 34, 64, 90], $result, "Unsorted array should be sorted correctly.");
    }

    public function testArrayWithDuplicates()
    {
        $sorter = new InsertionSort();
        $result = $sorter->sort([5, 3, 8, 3, 2]);
        $this->assertEquals([2, 3, 3, 5, 8], $result, "Array with duplicates should be sorted correctly.");
    }

    public function testArrayWithNegativeNumbers()
    {
        $sorter = new InsertionSort();
        $result = $sorter->sort([5, -1, 3, -10, 2]);
        $this->assertEquals([-10, -1, 2, 3, 5], $result, "Array with negative numbers should be sorted correctly.");
    }
}
