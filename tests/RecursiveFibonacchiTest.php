<?php

use PHPUnit\Framework\TestCase;
use App\RecursiveFibonacchi;

class RecursiveFibonacchiTest extends TestCase
{
    public function testFibonacciForSmallNumbers()
    {
        $obj = new RecursiveFibonacchi();

        // Fibonacci sequence for small numbers
        $this->assertEquals(0, $obj->fibonacchi(0)); // Fibonacci of 0
        $this->assertEquals(1, $obj->fibonacchi(1)); // Fibonacci of 1
        $this->assertEquals(1, $obj->fibonacchi(2)); // Fibonacci of 2
        $this->assertEquals(2, $obj->fibonacchi(3)); // Fibonacci of 3
        $this->assertEquals(3, $obj->fibonacchi(4)); // Fibonacci of 4
        $this->assertEquals(5, $obj->fibonacchi(5)); // Fibonacci of 5
    }

    public function testFibonacciForLargerNumbers()
    {
        $obj = new RecursiveFibonacchi();

        // Fibonacci sequence for larger numbers
        $this->assertEquals(8, $obj->fibonacchi(6));  // Fibonacci of 6
        $this->assertEquals(13, $obj->fibonacchi(7)); // Fibonacci of 7
        $this->assertEquals(21, $obj->fibonacchi(8)); // Fibonacci of 8
        $this->assertEquals(34, $obj->fibonacchi(9)); // Fibonacci of 9
        $this->assertEquals(55, $obj->fibonacchi(10)); // Fibonacci of 10
    }

    public function testFibonacciForEdgeCases()
    {
        $obj = new RecursiveFibonacchi();

        // Edge cases
        $this->assertEquals(0, $obj->fibonacchi(0)); // Fibonacci of 0
        $this->assertEquals(1, $obj->fibonacchi(1)); // Fibonacci of 1
        $this->assertEquals(1, $obj->fibonacchi(2)); // Fibonacci of 2
    }

    public function testFibonacciForNegativeNumbers()
    {
        $obj = new RecursiveFibonacchi();

        // Negative inputs should return 0 or throw an exception
        $this->expectException(\InvalidArgumentException::class);
        $obj->fibonacchi(-5);
    }

    public function testFibonacciForPerformance()
    {
        $obj = new RecursiveFibonacchi();

        // Larger Fibonacci number (for testing performance)
        $this->assertEquals(832040, $obj->fibonacchi(30)); // Fibonacci of 30
    }
}
