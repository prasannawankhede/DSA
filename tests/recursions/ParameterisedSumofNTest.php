<?php

namespace Tests\Recursions;

use App\Recursions\ParameterisedSumofN;
use PHPUnit\Framework\TestCase;

class ParameterisedSumofNTest extends TestCase
{
    public function testSumOfN()
    {
        $calculator = new ParameterisedSumofN();
        
        ob_start(); // Start output buffering
        $calculator->sum(5, 0); // Call the function
        $output = ob_get_clean(); // Get the output buffer content
        
        $this->assertEquals("15", $output); // Expected sum of 1 to 5
    }
}
