<?php

namespace Tests\Queues;

use PHPUnit\Framework\TestCase;
use App\Queues\ImplementQueueUsingSLL;

class ImplementQueueUsingSLLTest extends TestCase
{
    private ImplementQueueUsingSLL $queue;

    protected function setUp(): void
    {
        $this->queue = new ImplementQueueUsingSLL();
    }

    public function testEnqueueAndPeek()
    {
        $this->queue->enqueue(10);
        $this->assertSame(10, $this->queue->peek());

        $this->queue->enqueue(20);
        $this->assertSame(10, $this->queue->peek());
    }

    public function testDequeue()
    {
        $this->queue->enqueue(10);
        $this->queue->enqueue(20);
        $this->queue->enqueue(30);

        $this->assertSame(10, $this->queue->dequeue());
        $this->assertSame(20, $this->queue->peek());
    }

    public function testIsEmpty()
    {
        $this->assertTrue($this->queue->isEmpty());

        $this->queue->enqueue(5);
        $this->assertFalse($this->queue->isEmpty());

        $this->queue->dequeue();
        $this->assertTrue($this->queue->isEmpty());
    }

    public function testGetSize()
    {
        $this->assertSame(0, $this->queue->getSize());

        $this->queue->enqueue(10);
        $this->queue->enqueue(20);
        $this->queue->enqueue(30);

        $this->assertSame(3, $this->queue->getSize());

        $this->queue->dequeue();
        $this->assertSame(2, $this->queue->getSize());
    }

    public function testQueueOrder()
    {
        $this->queue->enqueue(1);
        $this->queue->enqueue(2);
        $this->queue->enqueue(3);

        $this->assertSame(1, $this->queue->dequeue());
        $this->assertSame(2, $this->queue->dequeue());
        $this->assertSame(3, $this->queue->dequeue());
    }

    public function testQueueToArr()
    {
        $this->queue->enqueue(100);
        $this->queue->enqueue(200);
        $this->queue->enqueue(300);

        $this->assertSame([100, 200, 300], $this->queue->queueToArr());
    }
}
