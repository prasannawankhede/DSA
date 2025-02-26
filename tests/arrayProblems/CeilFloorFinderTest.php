<?php

namespace Tests\ArrayProblems;

use PHPUnit\Framework\TestCase;
use App\ArrayProblems\CeilFloorFinder;

class CeilFloorFinderTest extends TestCase
{
    private $finder;

    protected function setUp(): void
    {
        $this->finder = new CeilFloorFinder();
    }

    public function testCeilAndFloorExist()
    {
        $result = $this->finder->findCeilAndFloor([5, 6, 8, 9, 6, 5, 5, 6], 7);
        $this->assertEquals([6, 8], $result);
    }

    public function testCeilDoesNotExist()
    {
        $result = $this->finder->findCeilAndFloor([5, 6, 8, 8, 6, 5, 5, 6], 10);
        $this->assertEquals([8, -1], $result);
    }

    public function testFloorDoesNotExist()
    {
        $result = $this->finder->findCeilAndFloor([10, 15, 20], 5);
        $this->assertEquals([-1, 10], $result);
    }

    public function testFloorAndCeilAreSame()
    {
        $result = $this->finder->findCeilAndFloor([5, 6, 7, 8], 6);
        $this->assertEquals([6, 6], $result);
    }

    public function testWithNegativeNumbers()
    {
        $result = $this->finder->findCeilAndFloor([-10, -5, 0, 5, 10], -6);
        $this->assertEquals([-10, -5], $result);
    }

    public function testSingleElementArray()
    {
        $result = $this->finder->findCeilAndFloor([7], 7);
        $this->assertEquals([7, 7], $result);
    }

    public function testSingleElementNoCeil()
    {
        $result = $this->finder->findCeilAndFloor([10], 15);
        $this->assertEquals([10, -1], $result);
    }

    public function testSingleElementNoFloor()
    {
        $result = $this->finder->findCeilAndFloor([10], 5);
        $this->assertEquals([-1, 10], $result);
    }

    public function testArrayWithDuplicates()
    {
        $result = $this->finder->findCeilAndFloor([2, 2, 2, 2, 2], 2);
        $this->assertEquals([2, 2], $result);
    }

    // Added test cases from the problem statement
    public function testGivenSampleInput1()
    {
        $result = $this->finder->findCeilAndFloor([3, 4, 4, 7, 8, 10], 8);
        $this->assertEquals([8, 8], $result);
    }

    public function testGivenSampleInput2()
    {
        $result = $this->finder->findCeilAndFloor([3, 4, 4, 7, 8, 10], 2);
        $this->assertEquals([-1, 3], $result);
    }
}
