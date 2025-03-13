<?php

namespace Tests\Recursions;

use App\Recursions\PrintNTimes;
use PHPUnit\Framework\TestCase;

class PrintNTimesTest extends TestCase
{
    public function testRecursion()
    {
        $res = new PrintNTimes();

        ob_start(); // Start capturing output
        $res->print();
        $output = ob_get_clean(); // Get captured output

        $this->assertEquals("11111", $output); // Check if output is "11111"
    }
}
