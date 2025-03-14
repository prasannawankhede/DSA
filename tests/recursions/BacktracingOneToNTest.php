<?php

namespace Tests\Recursions;

use App\Recursions\BacktracingOneToN;
use PHPUnit\Framework\TestCase;

class BacktracingOneToNTest extends TestCase
{
    public function testPrintOneToN()
    {
        $printer = new BacktracingOneToN();
        
        ob_start(); // Start output buffering
        $printer->print(5, 1); // Call the function
        $output = ob_get_clean(); // Get the output buffer content
        
        $this->assertEquals("12345", $output); // Expected output
    }
}
