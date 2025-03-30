<?php

namespace Tests\BitManipulation;

use PHPUnit\Framework\TestCase;
use App\BitManipulation\BitCheck;

class BitCheckTest extends TestCase
{
    public function testIsBitSet()
    {
        $bitCheck = new BitCheck();

        $this->assertTrue($bitCheck->isBitSet(5, 0)); // 5 = 101, 0th bit is 1
        $this->assertFalse($bitCheck->isBitSet(5, 1)); // 5 = 101, 1st bit is 0
        $this->assertTrue($bitCheck->isBitSet(5, 2)); // 5 = 101, 2nd bit is 1
        $this->assertFalse($bitCheck->isBitSet(5, 3)); // Out of range, should return false
    }
}
