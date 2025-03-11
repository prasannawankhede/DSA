<?php

namespace Tests\ArrayProblems;

use PHPUnit\Framework\TestCase;
use App\ArrayProblems\SecondLargestAndSmallestArray;

class SecondLargestAndSmallestArrayTest extends TestCase
{
    public function testFindWithNormalArray()
    {
        $obj = new SecondLargestAndSmallestArray();
        $result = $obj->find([10, 5, 8, 2, 15]);

        $this->assertEquals([10, 5], $result);
    }

    public function testFindWithSortedArray()
    {
        $obj = new SecondLargestAndSmallestArray();
        $result = $obj->find([1, 2, 3, 4, 5]);

        $this->assertEquals([4, 2], $result);
    }

    public function testFindWithReversedSortedArray()
    {
        $obj = new SecondLargestAndSmallestArray();
        $result = $obj->find([5, 4, 3, 2, 1]);

        $this->assertEquals([4, 2], $result);
    }

    public function testFindWithDuplicateElements()
    {
        $obj = new SecondLargestAndSmallestArray();
        $result = $obj->find([3, 3, 3, 2, 2, 1, 1]);

        $this->assertEquals([2, 2], $result);
    }

    public function testFindWithAllElementsSame()
    {
        $obj = new SecondLargestAndSmallestArray();
        $result = $obj->find([5, 5, 5, 5]);

        $this->assertNull($result); // No second largest or second smallest
    }

    public function testFindWithOnlyOneElement()
    {
        $obj = new SecondLargestAndSmallestArray();
        $result = $obj->find([10]);

        $this->assertNull($result); // Not enough elements
    }

    public function testFindWithTwoElements()
    {
        $obj = new SecondLargestAndSmallestArray();
        $result = $obj->find([10, 5]);

        $this->assertEquals([5, 10], $result); // Swap because second largest < smallest
    }

    public function testFindWithNegativeNumbers()
    {
        $obj = new SecondLargestAndSmallestArray();
        $result = $obj->find([-5, -2, -8, -1]);

        $this->assertEquals([-2, -5], $result);
    }
}
