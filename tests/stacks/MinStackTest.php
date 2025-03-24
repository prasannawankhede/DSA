<?php

use PHPUnit\Framework\TestCase;
use App\Stacks\MinStack;

class MinStackTest extends TestCase
{
    public function testMinStackOperations()
    {
        $stack = new MinStack();

        // Initially, min should be PHP_INT_MAX (default value)
        $this->assertEquals(PHP_INT_MAX, $stack->getMin());

        // Push elements
        $stack->push(5);
        $this->assertEquals(5, $stack->getMin());
        $this->assertEquals(5, $stack->top());

        $stack->push(3);
        $this->assertEquals(3, $stack->getMin());
        $this->assertEquals(3, $stack->top());

        $stack->push(7);
        $this->assertEquals(3, $stack->getMin());
        $this->assertEquals(7, $stack->top());

        $stack->push(2);
        $this->assertEquals(2, $stack->getMin());
        $this->assertEquals(2, $stack->top());

        // Pop elements and check min
        $stack->pop();
        $this->assertEquals(3, $stack->getMin());

        $stack->pop();
        $this->assertEquals(3, $stack->getMin());

        $stack->pop();
        $this->assertEquals(5, $stack->getMin());

        $stack->pop();
        $this->assertEquals(PHP_INT_MAX, $stack->getMin());
    }
}
