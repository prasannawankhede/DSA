<?php

namespace Tests\Recursions;

use App\Recursions\PrintFromOneToN;
use PHPUnit\Framework\TestCase;

class PrintFromOneToNTest extends TestCase
{
    public function testPrint()
    {
        $printer = new PrintFromOneToN();

        ob_start(); // Start output buffering
        $printer->print(1, 5);
        $output = ob_get_clean(); // Get the output and stop buffering

        $this->assertEquals("12345", $output);
    }
}
