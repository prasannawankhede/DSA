<?php

namespace Tests\BitManipulation;

use PHPUnit\Framework\TestCase;
use App\BitManipulation\SwapNum;

class SwapNumTest extends TestCase
{
    public function testSwap()
    {
        $swapNum = new SwapNum();

        $a = 5;
        $b = 10;
        $swapNum->swap($a, $b);

        $this->assertEquals(10, $a);
        $this->assertEquals(5, $b);

        // Another test case
        $x = -3;
        $y = 7;
        $swapNum->swap($x, $y);

        $this->assertEquals(7, $x);
        $this->assertEquals(-3, $y);
    }
}
