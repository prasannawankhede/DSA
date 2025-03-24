<?php

use PHPUnit\Framework\TestCase;
use App\Stacks\ImplementStackUsingQueue;

class ImplementStackUsingQueueTest extends TestCase {
    private $stack;

    protected function setUp(): void {
        $this->stack = new ImplementStackUsingQueue();
    }

    public function testPushAndTop() {
        $this->stack->push(3);
        $this->assertEquals(3, $this->stack->top());
        
        $this->stack->push(2);
        $this->assertEquals(2, $this->stack->top());
        
        $this->stack->push(4);
        $this->assertEquals(4, $this->stack->top());
    }

    public function testPop() {
        $this->stack->push(3);
        $this->stack->push(2);
        $this->stack->push(4);
        
        $this->assertEquals(4, $this->stack->pop());
        $this->assertEquals(2, $this->stack->top());
        
        $this->assertEquals(2, $this->stack->pop());
        $this->assertEquals(3, $this->stack->top());
        
        $this->assertEquals(3, $this->stack->pop());
        $this->assertNull($this->stack->pop());
    }

    public function testSize() {
        $this->assertEquals(0, $this->stack->size());
        
        $this->stack->push(1);
        $this->assertEquals(1, $this->stack->size());
        
        $this->stack->push(2);
        $this->assertEquals(2, $this->stack->size());
        
        $this->stack->pop();
        $this->assertEquals(1, $this->stack->size());
    }

    public function testIsEmpty() {
        $this->assertTrue($this->stack->isEmpty());
        
        $this->stack->push(5);
        $this->assertFalse($this->stack->isEmpty());
        
        $this->stack->pop();
        $this->assertTrue($this->stack->isEmpty());
    }
}
