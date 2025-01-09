<?php

use PHPUnit\Framework\TestCase;
use App\HourglassPattern;

class HourglassPatternTest extends TestCase {
    public function testPrintHourglassWithFiveRows() {
        $expectedOutput = "*********\n *******\n  *****\n   ***\n    *\n   ***\n  *****\n *******\n*********\n";
        $this->expectOutputString($expectedOutput);

        $obj = new HourglassPattern();
        $obj->printHourglass(5);
    }

    public function testPrintHourglassWithThreeRows() {
        $expectedOutput = "*****\n ***\n  *\n ***\n*****\n";
        $this->expectOutputString($expectedOutput);

        $obj = new HourglassPattern();
        $obj->printHourglass(3);
    }

    public function testPrintHourglassWithOneRow() {
        $expectedOutput = "*\n";
        $this->expectOutputString($expectedOutput);

        $obj = new HourglassPattern();
        $obj->printHourglass(1);
    }

    public function testPrintHourglassWithZeroRows() {
        $this->expectOutputString("");

        $obj = new HourglassPattern();
        $obj->printHourglass(0);
    }
}
