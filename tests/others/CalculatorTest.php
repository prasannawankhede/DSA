<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase {
    public function testAddition() {
        $calculator = new Calculator();
        $this->assertEquals(7, $calculator->do(3, 4, "+"));
    }

    public function testSubtraction() {
        $calculator = new Calculator();
        $this->assertEquals(1, $calculator->do(5, 4, "-"));
    }

    public function testMultiplication() {
        $calculator = new Calculator();
        $this->assertEquals(20, $calculator->do(5, 4, "*"));
    }

    public function testDivision() {
        $calculator = new Calculator();
        $this->assertEquals(2, $calculator->do(8, 4, "/"));
    }

    public function testDivisionByZero() {
        $calculator = new Calculator();
        $this->assertEquals("Division by zero error!", $calculator->do(8, 0, "/"));
    }

    public function testInvalidOperator() {
        $calculator = new Calculator();
        $this->assertEquals("Please enter a valid operator: +, -, *, /", $calculator->do(5, 4, "%"));
    }
}
