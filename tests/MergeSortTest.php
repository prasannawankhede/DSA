<?php

use PHPUnit\Framework\TestCase;
use App\MergeSort;

class MergeSortTest extends TestCase
{
    public function testEmptyArray()
    {
        $arr = [];
        $mergeSort = new MergeSort();
        $mergeSort->mergeSort($arr, 0, count($arr) - 1);

        $this->assertEquals([], $arr, "Sorting an empty array should return an empty array.");
    }

    public function testSingleElementArray()
    {
        $arr = [5];
        $mergeSort = new MergeSort();
        $mergeSort->mergeSort($arr, 0, count($arr) - 1);

        $this->assertEquals([5], $arr, "Sorting a single-element array should return the same array.");
    }

    public function testSortedArray()
    {
        $arr = [1, 2, 3, 4, 5];
        $mergeSort = new MergeSort();
        $mergeSort->mergeSort($arr, 0, count($arr) - 1);

        $this->assertEquals([1, 2, 3, 4, 5], $arr, "An already sorted array should remain unchanged.");
    }

    public function testReverseSortedArray()
    {
        $arr = [5, 4, 3, 2, 1];
        $mergeSort = new MergeSort();
        $mergeSort->mergeSort($arr, 0, count($arr) - 1);

        $this->assertEquals([1, 2, 3, 4, 5], $arr, "A reverse-sorted array should be sorted in ascending order.");
    }

    public function testUnsortedArray()
    {
        $arr = [3, 5, 1, 4, 2];
        $mergeSort = new MergeSort();
        $mergeSort->mergeSort($arr, 0, count($arr) - 1);

        $this->assertEquals([1, 2, 3, 4, 5], $arr, "An unsorted array should be sorted correctly.");
    }

    public function testArrayWithDuplicates()
    {
        $arr = [4, 2, 4, 1, 2];
        $mergeSort = new MergeSort();
        $mergeSort->mergeSort($arr, 0, count($arr) - 1);

        $this->assertEquals([1, 2, 2, 4, 4], $arr, "An array with duplicates should be sorted correctly.");
    }

    public function testArrayWithNegativeNumbers()
    {
        $arr = [-3, -1, -7, -4, -2, 0, 5];
        $mergeSort = new MergeSort();
        $mergeSort->mergeSort($arr, 0, count($arr) - 1);

        $this->assertEquals([-7, -4, -3, -2, -1, 0, 5], $arr, "An array with negative numbers should be sorted correctly.");
    }

    public function testMixedArray()
    {
        $arr = [10, -3, 7, 0, -1, 5];
        $mergeSort = new MergeSort();
        $mergeSort->mergeSort($arr, 0, count($arr) - 1);

        $this->assertEquals([-3, -1, 0, 5, 7, 10], $arr, "A mixed array with positive, negative, and zero values should be sorted correctly.");
    }
}
