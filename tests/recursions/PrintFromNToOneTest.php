<?php

namespace Tests\Recursions;

use PHPUnit\Framework\TestCase;
use App\Recursions\PrintFromNToOne;

class PrintFromNToOneTest extends TestCase
{
    public function testPrintFromNToOne()
    {
        $obj = new PrintFromNToOne();
        
        // Capture output
        ob_start();
        $obj->print(5);
        $output = ob_get_clean();

        $this->assertEquals("54321", trim($output));
    }
}
