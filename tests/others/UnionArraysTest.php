<?php


use App\UnionOfArrays;
use PHPUnit\Framework\TestCase;

class UnionArraysTest extends TestCase
{
    public function testUnion()
    {
        $unionObj = new UnionOfArrays();

        // Test case 1: Normal case with overlapping arrays
        $arr1 = [1, 2, 3, 4, 5];
        $arr2 = [3, 4, 5, 6, 7];
        $expected = [1, 2, 3, 4, 5, 6, 7];
        $this->assertEquals($expected, $unionObj->union($arr1, $arr2));

        // Test case 2: One array is empty
        $arr1 = [];
        $arr2 = [1, 2, 3];
        $expected = [1, 2, 3];
        $this->assertEquals($expected, $unionObj->union($arr1, $arr2));

        // Test case 3: Both arrays are empty
        $arr1 = [];
        $arr2 = [];
        $expected = [];
        $this->assertEquals($expected, $unionObj->union($arr1, $arr2));

        // Test case 4: Arrays with all unique elements
        $arr1 = [1, 3, 5];
        $arr2 = [2, 4, 6];
        $expected = [1, 2, 3, 4, 5, 6];
        $this->assertEquals($expected, $unionObj->union($arr1, $arr2));

        // Test case 5: Arrays with duplicates in one or both arrays
        $arr1 = [1, 2, 2, 3];
        $arr2 = [3, 4, 4, 5];
        $expected = [1, 2, 3, 4, 5];
        $this->assertEquals($expected, $unionObj->union($arr1, $arr2));
    }
}