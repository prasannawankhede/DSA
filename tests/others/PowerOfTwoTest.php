<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\PowerOfTwo;

class PowerOfTwoTest extends TestCase {

    private $powerOfTwo;

    protected function setUp(): void {
        $this->powerOfTwo = new PowerOfTwo();
    }

    public function testValidPowerOfTwo() {
        // Test for valid powers of two
        $this->assertTrue($this->powerOfTwo->find(1)); // 2^0 = 1
        $this->assertTrue($this->powerOfTwo->find(2)); // 2^1 = 2
        $this->assertTrue($this->powerOfTwo->find(4)); // 2^2 = 4
        $this->assertTrue($this->powerOfTwo->find(8)); // 2^3 = 8
        $this->assertTrue($this->powerOfTwo->find(16)); // 2^4 = 16
    }

    public function testInvalidPowerOfTwo() {
        // Test for numbers that are not powers of two
        $this->assertFalse($this->powerOfTwo->find(0)); // 0 is not a power of two
        $this->assertFalse($this->powerOfTwo->find(3)); // Not a power of two
        $this->assertFalse($this->powerOfTwo->find(5)); // Not a power of two
        $this->assertFalse($this->powerOfTwo->find(10)); // Not a power of two
    }

    public function testNegativeNumbers() {
        // Test for negative numbers
        $this->assertFalse($this->powerOfTwo->find(-1)); // Negative numbers are not powers of two
        $this->assertFalse($this->powerOfTwo->find(-16)); // Negative numbers are not powers of two
    }
}
