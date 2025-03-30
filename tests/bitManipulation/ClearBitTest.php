<?php

namespace Tests\BitManipulation;

use App\BitManipulation\ClearBit;
use PHPUnit\Framework\TestCase;

class ClearBitTest extends TestCase
{
    public function testClear()
    {
        $cb = new ClearBit();

        // Clearing the 2nd bit of 13 (1101) -> should become 9 (1001)
        $this->assertEquals(9, $cb->clear(13, 2));

        // Clearing the 1st bit of 7 (0111) -> should become 5 (0101)
        $this->assertEquals(5, $cb->clear(7, 1));

        // Clearing the 0th bit of 5 (0101) -> should become 4 (0100)
        $this->assertEquals(4, $cb->clear(5, 0));

        // Clearing the 3rd bit of 15 (1111) -> should become 7 (0111)
        $this->assertEquals(7, $cb->clear(15, 3));
    }
}
