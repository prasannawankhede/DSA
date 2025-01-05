<?php

use PHPUnit\Framework\TestCase;
use App\ResursionPrintNTimes;

class ResursionPrintNTimesTest extends TestCase {
    public function testDoPrintsCorrectNumberOfHi() {
        // Capture the output
        $this->expectOutputString("hi\nhi\nhi\n");

        // Call the function
        $obj = new ResursionPrintNTimes();
        $obj->do(3);
    }

    public function testDoWithZero() {
        // Expect no output
        $this->expectOutputString("");

        $obj = new ResursionPrintNTimes();
        $obj->do(0);
    }

    public function testDoWithNegativeNumber() {
        // Expect no output
        $this->expectOutputString("");

        $obj = new ResursionPrintNTimes();
        $obj->do(-5);
    }
}
