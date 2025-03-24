<?php

use PHPUnit\Framework\TestCase;
use App\Queues\ImplementQueueUsingStacks;

class ImplementQueueUsingStacksTest extends TestCase {
    public function testQueueOperations() {
        $queue = new ImplementQueueUsingStacks();
        
        // Initially, queue should be empty
        $this->assertTrue($queue->isEmpty());
        
        // Push elements into the queue
        $queue->push(1);
        $queue->push(2);
        $queue->push(3);
        
        // Check size
        $this->assertEquals(3, $queue->size());
        
        // Check top element
        $this->assertEquals(1, $queue->top());
        
        // Pop elements and check order
        $this->assertEquals(1, $queue->pop());
        $this->assertEquals(2, $queue->pop());
        $this->assertEquals(3, $queue->pop());
        
        // Queue should be empty again
        $this->assertTrue($queue->isEmpty());
    }
}
