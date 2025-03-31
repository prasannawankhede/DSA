<?php
namespace Tests\BitManipulation;

use App\BitManipulation\BitFlipCounter;
use PHPUnit\Framework\TestCase;

class BitFlipCounterTest extends TestCase
{
    public function testCountFlips()
    {
        $counter = new BitFlipCounter();

                                                              // Test cases with expected results
        $this->assertEquals(3, $counter->countFlips(10, 7));  // 1010 -> 0111 (3 flips)
        $this->assertEquals(2, $counter->countFlips(29, 15)); // 11101 -> 01111 (2 flips)
        $this->assertEquals(0, $counter->countFlips(5, 5));   // Same numbers (0 flips)
        $this->assertEquals(1, $counter->countFlips(2, 3));   // 10 -> 11 (1 flip)
        $this->assertEquals(3, $counter->countFlips(8, 15));  // 1000 -> 1111 (3 flips)
    }
}
