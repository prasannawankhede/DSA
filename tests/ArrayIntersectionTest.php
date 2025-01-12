<?php

use PHPUnit\Framework\TestCase;
use App\ArrayIntersection;

class ArrayIntersectionTest extends TestCase {

    #[\PHPUnit\Framework\Attributes\Test]
    public function testFindIntersection() {
        $arrayIntersection = new ArrayIntersection();

        // Test case 1: Two arrays with common elements
        $arr1 = [1, 2, 3, 4];
        $arr2 = [3, 4, 5, 6];
        $expected = [3, 4];
        $this->assertEquals($expected, $arrayIntersection->find($arr1, $arr2), "Failed for arrays with common elements");

        // Test case 2: Arrays with no common elements
        $arr1 = [1, 2, 7];
        $arr2 = [3, 4, 5];
        $expected = [];
        $this->assertEquals($expected, $arrayIntersection->find($arr1, $arr2), "Failed for arrays with no common elements");

        // Test case 3: One empty array
        $arr1 = [];
        $arr2 = [1, 2, 3];
        $expected = [];
        $this->assertEquals($expected, $arrayIntersection->find($arr1, $arr2), "Failed for one empty array");

        // Test case 4: Both arrays are empty
        $arr1 = [];
        $arr2 = [];
        $expected = [];
        $this->assertEquals($expected, $arrayIntersection->find($arr1, $arr2), "Failed for both empty arrays");

        // Test case 5: Arrays with duplicates
        $arr1 = [1, 2, 2, 3];
        $arr2 = [2, 3, 3, 4];
        $expected = [2, 3];
        $this->assertEquals($expected, $arrayIntersection->find($arr1, $arr2), "Failed for arrays with duplicates");
    }
}
