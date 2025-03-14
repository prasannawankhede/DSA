<?php

namespace Tests\Recursions;

use App\Recursions\FunctionalSumofN;
use PHPUnit\Framework\TestCase;

class FunctionalSumofNTest extends TestCase
{
    public function testSumOfN()
    {
        $calculator = new FunctionalSumofN();
        $result = $calculator->sum(5); // Expected sum: 1 + 2 + 3 + 4 + 5 = 15
        
        $this->assertEquals(15, $result);
    }
}
