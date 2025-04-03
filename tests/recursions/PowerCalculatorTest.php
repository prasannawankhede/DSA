<?php
namespace Tests\Unit\Recursions;

use App\Recursions\PowerCalculator;
use PHPUnit\Framework\TestCase;

class PowerCalculatorTest extends TestCase
{
    private PowerCalculator $calculator;

    protected function setUp(): void
    {
        parent::setUp();
        $this->calculator = new PowerCalculator();
    }

    public function testPositiveExponents()
    {
        $this->assertEquals(8, $this->calculator->myPow(2, 3));
        $this->assertEquals(1, $this->calculator->myPow(5, 0));
        $this->assertEquals(1024, $this->calculator->myPow(2, 10));
        $this->assertEquals(0.25, $this->calculator->myPow(2, -2));
    }

    public function testNegativeExponents()
    {
        $this->assertEquals(0.125, $this->calculator->myPow(2, -3));
        $this->assertEquals(0.04, $this->calculator->myPow(5, -2));
    }

    public function testFractionalBase()
    {
        $this->assertEquals(0.25, $this->calculator->myPow(0.5, 2));
        $this->assertEquals(4, $this->calculator->myPow(0.5, -2));
    }

    public function testEdgeCases()
{
    $this->assertEquals(1, $this->calculator->myPow(0, 0)); // 0^0 is undefined but commonly returns 1
    $this->assertEquals(0, $this->calculator->myPow(0, 5));
    $this->assertEquals(INF, $this->calculator->myPow(0, -5));
    $this->assertEquals(1, $this->calculator->myPow(1, 1000000)); // Large exponent
}
}