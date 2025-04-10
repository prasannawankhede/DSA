<?php

namespace Tests\Heap;

use PHPUnit\Framework\TestCase;
use App\Heap\SumElementsBetnkSmallestk;

class SumElementsBetnkSmallestkTest extends TestCase
{
    public function testExample1()
    {
        $obj = new SumElementsBetnkSmallestk();
        $arr = [1, 3, 12, 5, 15, 11];
        $k1 = 3;
        $k2 = 6;

        $result = $obj->findSumBetwnK($arr, $k1, $k2);
        $this->assertEquals(23, $result); // Between 5 and 15 => 11 + 12 = 23
    }

    public function testExample2()
    {
        $obj = new SumElementsBetnkSmallestk();
        $arr = [20, 8, 22, 4, 12, 10, 14];
        $k1 = 3;
        $k2 = 6;

        $result = $obj->findSumBetwnK($arr, $k1, $k2);
        $this->assertEquals(26, $result); // Between 10 and 20 => 12 + 14 = 26
    }

    public function testNoElementsInRange()
    {
        $obj = new SumElementsBetnkSmallestk();
        $arr = [1, 2, 3, 4, 5];
        $k1 = 1;
        $k2 = 2;

        $result = $obj->findSumBetwnK($arr, $k1, $k2);
        $this->assertEquals(0, $result); // Nothing strictly between 1st and 2nd smallest
    }

    public function testSameKValues()
    {
        $obj = new SumElementsBetnkSmallestk();
        $arr = [7, 10, 4, 3, 20, 15];
        $k1 = 4;
        $k2 = 4;

        $result = $obj->findSumBetwnK($arr, $k1, $k2);
        $this->assertEquals(0, $result); // Same K values, no range
    }
}
