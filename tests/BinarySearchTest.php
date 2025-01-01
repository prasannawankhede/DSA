<?php

use PHPUnit\Framework\TestCase;
use App\BinarySearch;

class BinarySearchTest extends TestCase
{
    public function testBinarySearchWithExistingElement()
    {
        $obj = new BinarySearch();
        $result = $obj->search([1, 2, 3, 4], 4);
        $this->assertEquals(3, $result); // Target 4 exists at index 3
    }

    public function testBinarySearchWithNonExistingElement()
    {
        $obj = new BinarySearch();
        $result = $obj->search([1, 2, 3, 4], 5);
        $this->assertEquals(-1, $result); // Target 5 does not exist in the array
    }

    public function testBinarySearchWithEmptyArray()
    {
        $obj = new BinarySearch();
        $result = $obj->search([], 1);
        $this->assertEquals(-1, $result); // Target does not exist in an empty array
    }

    public function testBinarySearchWithSingleElementArrayFound()
    {
        $obj = new BinarySearch();
        $result = $obj->search([7], 7);
        $this->assertEquals(0, $result); // Target 7 exists at index 0
    }

    public function testBinarySearchWithSingleElementArrayNotFound()
    {
        $obj = new BinarySearch();
        $result = $obj->search([7], 5);
        $this->assertEquals(-1, $result); // Target 5 does not exist in the array
    }

    public function testBinarySearchWithLargeArray()
    {
        $obj = new BinarySearch();
        $array = range(1, 1000); // Array from 1 to 1000
        $result = $obj->search($array, 500);
        $this->assertEquals(499, $result); // Target 500 exists at index 499
    }

    public function testBinarySearchWithNegativeNumbers()
    {
        $obj = new BinarySearch();
        $result = $obj->search([-10, -5, 0, 5, 10], -5);
        $this->assertEquals(1, $result); // Target -5 exists at index 1
    }

    // public function testBinarySearchWithDuplicateElements()
    // {
    //     $obj = new BinarySearch();
    //     $result = $obj->search([1, 2, 2, 2, 3, 4], 2);
    //     $this->assertEquals(1, $result); // Target 2 exists at index 1 (first occurrence)
    // }

    public function testBinarySearchWithFirstElement()
    {
        $obj = new BinarySearch();
        $result = $obj->search([10, 20, 30, 40, 50], 10);
        $this->assertEquals(0, $result); // Target 10 exists at index 0
    }

    public function testBinarySearchWithLastElement()
    {
        $obj = new BinarySearch();
        $result = $obj->search([10, 20, 30, 40, 50], 50);
        $this->assertEquals(4, $result); // Target 50 exists at index 4
    }
}
