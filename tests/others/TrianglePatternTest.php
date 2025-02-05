<?php

use PHPUnit\Framework\TestCase;
use App\TrianglePattern;

class TrianglePatternTest extends TestCase {
    public function testPrintTriangleWithFiveRows() {
        $this->expectOutputString("*\n**\n***\n****\n*****\n");

        $obj = new TrianglePattern();
        $obj->printTriangle(5);
    }

    public function testPrintTriangleWithThreeRows() {
        $this->expectOutputString("*\n**\n***\n");

        $obj = new TrianglePattern();
        $obj->printTriangle(3);
    }

    public function testPrintTriangleWithZeroRows() {
        $this->expectOutputString("");

        $obj = new TrianglePattern();
        $obj->printTriangle(0);
    }
}
