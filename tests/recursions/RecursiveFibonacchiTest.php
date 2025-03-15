<?php

namespace Tests\Recursions;

use PHPUnit\Framework\TestCase;
use App\Recursions\RecursiveFibonacchi;

class RecursiveFibonacchiTest extends TestCase
{
    public function testFibonacci()
    {
        $fib = new RecursiveFibonacchi();
        
        $this->assertEquals(0, $fib->fibonacchi(0));
        $this->assertEquals(1, $fib->fibonacchi(1));
        $this->assertEquals(1, $fib->fibonacchi(2));
        $this->assertEquals(2, $fib->fibonacchi(3));
        $this->assertEquals(3, $fib->fibonacchi(4));
        $this->assertEquals(5, $fib->fibonacchi(5));
        $this->assertEquals(8, $fib->fibonacchi(6));
        $this->assertEquals(13, $fib->fibonacchi(7));
    }

    public function testNegativeInput()
    {
        $this->expectException(\InvalidArgumentException::class);
        $fib = new RecursiveFibonacchi();
        $fib->fibonacchi(-1);
    }
}
