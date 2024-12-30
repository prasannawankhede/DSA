<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\FactorialNumber;

class FactorialNumberTest extends TestCase {

    private $factorialNumber;

    protected function setUp(): void {
        $this->factorialNumber = new FactorialNumber();
    }

    public function testFactorialWithValidInput() {
        $this->assertEquals(1, $this->factorialNumber->find(0)); // 0! = 1
        $this->assertEquals(1, $this->factorialNumber->find(1)); // 1! = 1
        $this->assertEquals(120, $this->factorialNumber->find(5)); // 5! = 120
        $this->assertEquals(720, $this->factorialNumber->find(6)); // 6! = 720
    }

    public function testFactorialWithNegativeInput() {
        $this->expectException(\InvalidArgumentException::class);
        $this->factorialNumber->find(-5); // Should throw an exception
    }
}
