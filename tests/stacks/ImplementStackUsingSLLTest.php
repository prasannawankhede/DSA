<?php

namespace Tests\Stacks;

use PHPUnit\Framework\TestCase;
use App\Stacks\ImplementStackUsingSLL;

class ImplementStackUsingSLLTest extends TestCase
{
    private ImplementStackUsingSLL $stack;

    protected function setUp(): void
    {
        $this->stack = new ImplementStackUsingSLL(10);
    }

    public function testPushAndPeek()
    {
        $this->stack->push(5);
        $this->stack->push(10);
        
        $this->assertSame(10, $this->stack->pop());
        $this->assertSame(5, $this->stack->pop());
    }

    public function testSize()
    {
        $this->stack->push(1);
        $this->stack->push(2);
        $this->stack->push(3);
        
        $this->assertSame(3, $this->stack->size());

        $this->stack->pop();
        $this->assertSame(2, $this->stack->size());
    }

    public function testIsEmpty()
    {
        $this->assertTrue($this->stack->empty());
        
        $this->stack->push(100);
        $this->assertFalse($this->stack->empty());

        $this->stack->pop();
        $this->assertTrue($this->stack->empty());
    }

    public function testStackToArr()
    {
        $this->stack->push(1);
        $this->stack->push(2);
        $this->stack->push(3);

        $this->assertSame([3, 2, 1], $this->stack->stackToArr());
    }
}
