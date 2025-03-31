<?php
namespace Tests\BitManipulation;

use App\BitManipulation\CountNumOfSetBits;
use PHPUnit\Framework\TestCase;

class CountNumOfSetBitsTest extends TestCase
{
    public function testCount()
    {
        $counter = new CountNumOfSetBits();

        $this->assertEquals(0, $counter->count(0)); // 0 -> 0000
        $this->assertEquals(1, $counter->count(1)); // 1 -> 0001
        $this->assertEquals(2, $counter->count(3)); // 3 -> 0011
        $this->assertEquals(3, $counter->count(13)); // 13 -> 1101
        $this->assertEquals(4, $counter->count(15)); // 15 -> 1111
        $this->assertEquals(5, $counter->count(31)); // 31 -> 11111
    }
}
