<?php

namespace Tests\Recursions;

use PHPUnit\Framework\TestCase;
use App\Recursions\PrintUsingBacktrackingNToOne;

class PrintUsingBacktrackingNToOneTest extends TestCase
{
    public function testPrint()
    {
        $printer = new PrintUsingBacktrackingNToOne();

        ob_start(); // Start output buffering
        $printer->print(5);
        $output = ob_get_clean(); // Get the output and clear buffer

        $this->assertEquals("54321", trim($output)); // Check if output matches expected sequence
    }
}
