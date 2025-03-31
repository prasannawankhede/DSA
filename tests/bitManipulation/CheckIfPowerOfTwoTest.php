<?php
namespace Tests\BitManipulation;

use App\BitManipulation\CheckIfPowerOfTwo;
use PHPUnit\Framework\TestCase;

class CheckIfPowerOfTwoTest extends TestCase
{
    public function testCheck()
    {
        $checker = new CheckIfPowerOfTwo();

        $this->assertTrue($checker->check(1));   // 2^0 = 1
        $this->assertTrue($checker->check(2));   // 2^1 = 2
        $this->assertTrue($checker->check(4));   // 2^2 = 4
        $this->assertTrue($checker->check(8));   // 2^3 = 8
        $this->assertTrue($checker->check(16));  // 2^4 = 16
        $this->assertFalse($checker->check(0));  // 0 is not a power of 2
        $this->assertFalse($checker->check(3));  // 3 is not a power of 2
        $this->assertFalse($checker->check(5));  // 5 is not a power of 2
        $this->assertFalse($checker->check(6));  // 6 is not a power of 2
        $this->assertFalse($checker->check(7));  // 7 is not a power of 2
    }
}
