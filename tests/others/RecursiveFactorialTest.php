<?php

use PHPUnit\Framework\TestCase;
use App\RecursiveFactorial;

class RecursiveFactorialTest extends TestCase
{
    public function testRecursion()
    {
        $obj = new RecursiveFactorial();

        // Test for n = 5
        $result = $obj->recursiveFact(5);
        $this->assertEquals(120, $result);
    }

    public function testFactorialOfZero()
    {
        $obj = new RecursiveFactorial();

        // Factorial of 0 should be 1
        $result = $obj->recursiveFact(0);
        $this->assertEquals(1, $result);
    }

    public function testFactorialOfOne()
    {
        $obj = new RecursiveFactorial();

        // Factorial of 1 should be 1
        $result = $obj->recursiveFact(1);
        $this->assertEquals(1, $result);
    }

    public function testFactorialOfLargeNumber()
    {
        $obj = new RecursiveFactorial();

        // Factorial of 10
        $result = $obj->recursiveFact(10);
        $this->assertEquals(3628800, $result);

        // Factorial of 7
        $result = $obj->recursiveFact(7);
        $this->assertEquals(5040, $result);
    }

    public function testFactorialForNegativeNumbers()
    {
        $obj = new RecursiveFactorial();

        // Negative inputs should throw an exception
        $this->expectException(\InvalidArgumentException::class);
        $obj->recursiveFact(-5);
    }
}
