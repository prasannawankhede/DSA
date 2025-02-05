<?php

use PHPUnit\Framework\TestCase;
use App\QuickSort;

class QuickSortTest extends TestCase {

    public function testEmptyArray() {
        $qs = new QuickSort();
        $result = $qs->sort([]);
        $this->assertEquals([], $result, "Empty array should return an empty array.");
    }

    public function testSingleElementArray() {
        $qs = new QuickSort();
        $result = $qs->sort([42]);
        $this->assertEquals([42], $result, "Single-element array should return the same array.");
    }

    public function testAlreadySortedArray() {
        $qs = new QuickSort();
        $result = $qs->sort([1, 2, 3, 4, 5]);
        $this->assertEquals([1, 2, 3, 4, 5], $result, "An already sorted array should remain unchanged.");
    }

    public function testReverseSortedArray() {
        $qs = new QuickSort();
        $result = $qs->sort([5, 4, 3, 2, 1]);
        $this->assertEquals([1, 2, 3, 4, 5], $result, "A reverse-sorted array should be sorted in ascending order.");
    }

    public function testUnsortedArray() {
        $qs = new QuickSort();
        $result = $qs->sort([8, 3, 7, 4, 2, 6, 5]);
        $this->assertEquals([2, 3, 4, 5, 6, 7, 8], $result, "An unsorted array should be sorted correctly.");
    }

    public function testArrayWithDuplicates() {
        $qs = new QuickSort();
        $result = $qs->sort([4, 2, 4, 3, 2]);
        $this->assertEquals([2, 2, 3, 4, 4], $result, "An array with duplicates should be sorted with duplicates in order.");
    }

    public function testArrayWithNegativeNumbers() {
        $qs = new QuickSort();
        $result = $qs->sort([-3, -1, -7, -4, -2, 0, 5]);
        $this->assertEquals([-7, -4, -3, -2, -1, 0, 5], $result, "An array with negative numbers should be sorted correctly.");
    }

    public function testMixedArray() {
        $qs = new QuickSort();
        $result = $qs->sort([10, -3, 7, 0, -1, 5]);
        $this->assertEquals([-3, -1, 0, 5, 7, 10], $result, "A mixed array with positive, negative, and zero values should be sorted correctly.");
    }
}
