<?php

namespace Tests\linkedlist;

use PHPUnit\Framework\TestCase;
use App\linkedlist\LinkedListQueue;

class LinkedListQueueTest extends TestCase {

    public function testQueueOperations(): void {
        $queue = new LinkedListQueue();
        
        // Initially, the queue should be empty.
        $this->assertTrue($queue->isEmpty(), "Queue should be empty initially.");
        $this->assertEquals(0, $queue->getSize(), "Queue size should be 0 initially.");
        
        // Enqueue elements.
        $queue->enqueue(10); // Queue: [10]
        $queue->enqueue(20); // Queue: [10, 20]
        $queue->enqueue(30); // Queue: [10, 20, 30]
        
        $this->assertFalse($queue->isEmpty(), "Queue should not be empty after enqueuing elements.");
        $this->assertEquals(3, $queue->getSize(), "Queue size should be 3 after enqueuing.");
        $this->assertEquals(10, $queue->peek(), "Peek should return 10, the front element.");
        
        // Test printed output using output buffering.
        ob_start();
        $queue->printQueue();
        $output = ob_get_clean();
        // Assuming printList() prints elements with "->" delimiter.
        $this->assertEquals("10->20->30->", $output, "Printed output should match expected format.");
        
        // Dequeue an element.
        $dequeued = $queue->dequeue();
        $this->assertEquals(10, $dequeued, "Dequeued element should be 10.");
        $this->assertEquals(2, $queue->getSize(), "Queue size should be 2 after one dequeue.");
        $this->assertEquals(20, $queue->peek(), "After dequeue, peek should return 20.");
        
        // Dequeue remaining elements.
        $queue->dequeue(); // removes 20
        $queue->dequeue(); // removes 30
        $this->assertTrue($queue->isEmpty(), "Queue should be empty after dequeuing all elements.");
        $this->assertEquals(0, $queue->getSize(), "Queue size should be 0 after all dequeues.");
        $this->assertNull($queue->peek(), "Peek should return null when queue is empty.");
    }
}
