<?php
use App\BitManipulation\XorRangeCalculator;
use PHPUnit\Framework\TestCase;

class XorRangeCalculatorTest extends TestCase
{
    private XorRangeCalculator $calculator;

    protected function setUp(): void
    {
        $this->calculator = new XorRangeCalculator();
    }

    public function testXorRange()
    {
        $this->assertEquals(0, $this->calculator->xorRange(2, 5)); // Expected 0
        $this->assertEquals(2, $this->calculator->xorRange(3, 9)); // Expected 2
        $this->assertEquals(0, $this->calculator->xorRange(4, 4));
        $this->assertEquals(15, $this->calculator->xorRange(1, 5));
        $this->assertEquals(6, $this->calculator->xorRange(0, 6));
    }

    public function testXorRangeSingleElement()
    {
        // Testing single number range
        $this->assertEquals(3, $this->calculator->xorRange(3, 3));
        $this->assertEquals(7, $this->calculator->xorRange(7, 7));
    }

    public function testXorRangeEdgeCases()
    {
                                                                   // Edge cases
        $this->assertEquals(0, $this->calculator->xorRange(0, 0)); // XOR of 0 is 0
        $this->assertEquals(1, $this->calculator->xorRange(0, 1)); // XOR of [0,1] = 1
        $this->assertEquals(2, $this->calculator->xorRange(2, 2)); // XOR of [2] = 2
    }
}
