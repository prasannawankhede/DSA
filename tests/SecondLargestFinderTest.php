<?php

use PHPUnit\Framework\TestCase;
use App\SecondLargestFinder;

class SecondLargestFinderTest extends TestCase
{
    private $finder;

    protected function setUp(): void
    {
        $this->finder = new SecondLargestFinder();
    }

    public function testFindSecondLargestWithDistinctNumbers()
    {
        $input = [12, 35, 1, 10, 34, 1];
        $expected = 34;
        $result = $this->finder->findSecondLargest($input);

        $this->assertEquals($expected, $result);
    }

    public function testFindSecondLargestWithAllSameNumbers()
    {
        $input = [5, 5, 5, 5];
        $expected = null; // No second largest
        $result = $this->finder->findSecondLargest($input);

        $this->assertEquals($expected, $result);
    }

    public function testFindSecondLargestWithOnlyOneElement()
    {
        $input = [10];
        $expected = null; // Not enough elements
        $result = $this->finder->findSecondLargest($input);

        $this->assertEquals($expected, $result);
    }

    public function testFindSecondLargestWithNegativeNumbers()
    {
        $input = [-10, -3, -20, -4];
        $expected = -4; // Second largest negative number
        $result = $this->finder->findSecondLargest($input);

        $this->assertEquals($expected, $result);
    }

    public function testFindSecondLargestWithMixedNumbers()
    {
        $input = [3, 5, 7, 1, 5, 7, 9];
        $expected = 7;
        $result = $this->finder->findSecondLargest($input);

        $this->assertEquals($expected, $result);
    }
}
