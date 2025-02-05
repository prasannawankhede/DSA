<?php

use PHPUnit\Framework\TestCase;
use App\SumProblem;

class SumProblemTest extends TestCase
{
    private SumProblem $sumProblem;

    protected function setUp(): void
    {
        $this->sumProblem = new SumProblem();
    }

    public function testFindReturnsYesWhenSumExists()
    {
        $arr = [2, 6, 5, 8, 11];
        $target = 14;

        $result = $this->sumProblem->find($arr, $target);

        $this->assertEquals('yes', $result);
    }

    public function testFindReturnsNoWhenNoSumExists()
    {
        $arr = [1, 3, 5, 7, 9];
        $target = 20;

        $result = $this->sumProblem->find($arr, $target);

        $this->assertEquals('no', $result);
    }

    public function testFindHandlesEmptyArray()
    {
        $arr = [];
        $target = 10;

        $result = $this->sumProblem->find($arr, $target);

        $this->assertEquals('no', $result);
    }

    public function testFindHandlesSingleElementArray()
    {
        $arr = [10];
        $target = 10;

        $result = $this->sumProblem->find($arr, $target);

        $this->assertEquals('no', $result);
    }

    public function testFindReturnsYesForMultiplePairs()
    {
        $arr = [1, 2, 3, 4, 5, 6];
        $target = 7;

        $result = $this->sumProblem->find($arr, $target);

        $this->assertEquals('yes', $result);
    }

    public function testFindWorksForUnsortedArray()
    {
        $arr = [11, 8, 5, 6, 2];
        $target = 14;

        $result = $this->sumProblem->find($arr, $target);

        $this->assertEquals('yes', $result);
    }
}
