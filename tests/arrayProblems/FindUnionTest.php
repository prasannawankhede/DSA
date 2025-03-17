<?php
namespace Tests\ArrayProblems;

use PHPUnit\Framework\TestCase;
use App\ArrayProblems\FindUnion;

class FindUnionTest extends TestCase
{
    public function testFindUnion()
    {
        $findUnion = new FindUnion();

        $arr1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        $arr2 = [2, 3, 4, 4, 5, 11, 12];

        $expected = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
        $this->assertEquals($expected, $findUnion->findUnion($arr1, $arr2));

        // Edge case: One empty array
        $this->assertEquals([1, 2, 3], $findUnion->findUnion([1, 2, 3], []));
        $this->assertEquals([4, 5, 6], $findUnion->findUnion([], [4, 5, 6]));

        // Edge case: Both empty arrays
        $this->assertEquals([], $findUnion->findUnion([], []));

        // Edge case: Arrays with duplicates
        $this->assertEquals([1, 2, 3], $findUnion->findUnion([1, 1, 2, 2, 3], [1, 2, 3]));
    }
}
