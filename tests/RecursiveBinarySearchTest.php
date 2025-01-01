<?php
use PHPUnit\Framework\TestCase;
use App\RecursiveBinarySearch;

class RecursiveBinarySearchTest extends TestCase
{
    public function testBinarySearchForFoundElement()
    {
        $obj = new RecursiveBinarySearch();

        // Test for an element in the middle
        $this->assertEquals(3, $obj->recursiveBinary([1, 2, 3, 4, 5], 4));
    }

    public function testBinarySearchForNotFoundElement()
    {
        $obj = new RecursiveBinarySearch();

        // Test for an element not in the array
        $this->assertEquals(-1, $obj->recursiveBinary([1, 2, 3, 4, 5], 6));
    }

    public function testBinarySearchForFirstElement()
    {
        $obj = new RecursiveBinarySearch();

        // Test for the first element
        $this->assertEquals(0, $obj->recursiveBinary([1, 2, 3, 4, 5], 1));
    }

    public function testBinarySearchForLastElement()
    {
        $obj = new RecursiveBinarySearch();

        // Test for the last element
        $this->assertEquals(4, $obj->recursiveBinary([1, 2, 3, 4, 5], 5));
    }

    public function testBinarySearchForEmptyArray()
    {
        $obj = new RecursiveBinarySearch();

        // Test for an empty array
        $this->assertEquals(-1, $obj->recursiveBinary([], 4));
    }

    public function testBinarySearchForSingleElementArray()
    {
        $obj = new RecursiveBinarySearch();

        // Test for an array with a single element (found)
        $this->assertEquals(0, $obj->recursiveBinary([4], 4));

        // Test for an array with a single element (not found)
        $this->assertEquals(-1, $obj->recursiveBinary([4], 5));
    }

    public function testBinarySearchForDuplicateElements()
    {
        $obj = new RecursiveBinarySearch();

        // Test for duplicate elements (should return the first occurrence)
        $this->assertEquals(2, $obj->recursiveBinary([1, 2, 3, 3, 4, 5], 3));
    }

    public function testBinarySearchForNegativeNumbers()
    {
        $obj = new RecursiveBinarySearch();

        // Test for negative numbers in the array
        $this->assertEquals(1, $obj->recursiveBinary([-5, -3, 0, 2, 4], -3));
    }

    public function testBinarySearchForMixedNumbers()
    {
        $obj = new RecursiveBinarySearch();

        // Test for an array with mixed positive, negative, and zero
        $this->assertEquals(4, $obj->recursiveBinary([-10, -5, 0, 3, 8], 8));
        $this->assertEquals(3, $obj->recursiveBinary([-10, -5, 0, 3, 8], 3));
        $this->assertEquals(-1, $obj->recursiveBinary([-10, -5, 0, 3, 8], 7));
    }

    public function testBinarySearchForLargeArray()
    {
        $obj = new RecursiveBinarySearch();

        // Test for a large array
        $largeArray = range(1, 1000); // Array from 1 to 1000
        $this->assertEquals(499, $obj->recursiveBinary($largeArray, 500));
        $this->assertEquals(-1, $obj->recursiveBinary($largeArray, 1001));
    }
}
