<?php
namespace Tests\Queues;

use PHPUnit\Framework\TestCase;
use App\Queues\ImplementQueueUsingArr; // Make sure this matches your class file

class ImplementQueueUsingArrTest extends TestCase
{
    private $queue;

    protected function setUp(): void
    {
        $this->queue = new ImplementQueueUsingArr(6);
    }

    public function testPushAndTop()
    {
        $this->queue->push(4);
        $this->assertSame(4, $this->queue->top());

        $this->queue->push(14);
        $this->assertSame(4, $this->queue->top());
    }

    public function testPop()
    {
        $this->queue->push(4);
        $this->queue->push(14);
        $this->assertSame(4, $this->queue->pop());
        $this->assertSame(14, $this->queue->top());
    }

    public function testSize()
    {
        $this->queue->push(4);
        $this->queue->push(14);
        $this->queue->push(24);
        $this->assertSame(3, $this->queue->size());

        $this->queue->pop();
        $this->assertSame(2, $this->queue->size());
    }

    public function testQueueOrder()
    {
        $this->queue->push(10);
        $this->queue->push(20);
        $this->queue->push(30);

        $this->assertSame(10, $this->queue->pop());
        $this->assertSame(20, $this->queue->pop());
        $this->assertSame(30, $this->queue->pop());
    }
}
