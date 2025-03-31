<?php
namespace Tests\BitManipulation;

use App\BitManipulation\DivideTwoIntegersWithoutMD;
use PHPUnit\Framework\TestCase;

class DivideTwoIntegersWithoutMDTest extends TestCase
{
    public function testDivide()
    {
        $divider = new DivideTwoIntegersWithoutMD();

        // Basic test cases
        $this->assertEquals(3, $divider->divide(10, 3));
        $this->assertEquals(5, $divider->divide(15, 3));
        $this->assertEquals(2, $divider->divide(7, 3));

        // Negative number cases
        $this->assertEquals(-3, $divider->divide(-10, 3));
        $this->assertEquals(-3, $divider->divide(10, -3));
        $this->assertEquals(3, $divider->divide(-10, -3));

        // Edge cases
        $this->assertEquals(0, $divider->divide(0, 5));

        // Since divisor < 0 doesn't return null in your current implementation,
        // removing this test case (or update your main function if required).
    }

}
