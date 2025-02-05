<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Queue;

class QueueTest extends TestCase
{
    public function testEnqueueAndDequeue()
    {
        $queue = new Queue();
        $queue->enqueue(1);
        $queue->enqueue(2);

        $this->assertEquals(1, $queue->dequeue());
        $this->assertEquals(2, $queue->dequeue());
    }

    public function testIsEmpty()
    {
        $queue = new Queue();
        $this->assertTrue($queue->isEmpty());

        $queue->enqueue(1);
        $this->assertFalse($queue->isEmpty());
    }

    public function testSize()
    {
        $queue = new Queue();
        $this->assertEquals(0, $queue->size());

        $queue->enqueue(1);
        $queue->enqueue(2);
        $this->assertEquals(2, $queue->size());
    }

    public function testPeek()
    {
        $queue = new Queue();
        $queue->enqueue(1);
        $queue->enqueue(2);

        $this->assertEquals(1, $queue->peek());
        $this->assertEquals(1, $queue->dequeue());
        $this->assertEquals(2, $queue->peek());
    }

    public function testDequeueOnEmptyQueue()
    {
        $this->expectException(\RuntimeException::class);
        $queue = new Queue();
        $queue->dequeue();
    }

    public function testPeekOnEmptyQueue()
    {
        $this->expectException(\RuntimeException::class);
        $queue = new Queue();
        $queue->peek();
    }

    public function testPrintQueue()
    {
        $queue = new Queue();
        $this->assertEquals("Queue is empty.", $queue->print());

        $queue->enqueue(1);
        $queue->enqueue(2);
        $queue->enqueue(3);

        $expectedOutput = "Queue contents:\n[0] => 1\n[1] => 2\n[2] => 3\n";
        $this->assertEquals($expectedOutput, $queue->print());
    }
}