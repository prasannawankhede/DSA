<?php
namespace Tests\BitManipulation;

use App\BitManipulation\CheckOdd;
use PHPUnit\Framework\TestCase;

class CheckOddTest extends TestCase
{
    public function testIsOdd()
    {
        $checker = new CheckOdd();

        $this->assertTrue($checker->isOdd(5));   // 5 is odd
        $this->assertFalse($checker->isOdd(8));  // 8 is even
        $this->assertTrue($checker->isOdd(15));  // 15 is odd
        $this->assertFalse($checker->isOdd(22)); // 22 is even
        $this->assertTrue($checker->isOdd(-3));  // -3 is odd
        $this->assertFalse($checker->isOdd(0));  // 0 is even
    }
}
