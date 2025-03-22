<?php
use PHPUnit\Framework\TestCase;
use App\Stacks\ImplementStackUsingArr;

class ImplementStackUsingArrTest extends TestCase
{
    private $stack;

    protected function setUp(): void
    {
        $this->stack = new ImplementStackUsingArr(5);
    }

    public function testPushAndTop()
    {
        $this->stack->push(10);
        $this->stack->push(20);
        $this->assertSame(20, $this->stack->top());
    }

    public function testPop()
    {
        $this->stack->push(5);
        $this->stack->push(15);
        $this->assertSame(15, $this->stack->pop());
        $this->assertSame(5, $this->stack->top());
    }

    public function testSize()
    {
        $this->stack->push(1);
        $this->stack->push(2);
        $this->stack->push(3);
        $this->assertSame(3, $this->stack->size());
    }

    public function testPopOnEmptyStack()
    {
        $this->assertSame(-1, $this->stack->pop());
    }

    public function testTopOnEmptyStack()
    {
        $this->assertSame(-1, $this->stack->top());
    }
}
