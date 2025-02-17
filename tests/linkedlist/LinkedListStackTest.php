<?php

namespace Tests\linkedlist;

use PHPUnit\Framework\TestCase;
use App\linkedlist\LinkedListStack;

class LinkedListStackTest extends TestCase {

    public function testStackOperations(): void {
        $stack = new LinkedListStack();
        
        // Initially, the stack should be empty.
        $this->assertTrue($stack->isEmpty());
        $this->assertEquals(0, $stack->getSize());
        
        // Push elements onto the stack.
        $stack->push(10);  // Stack becomes [10] (top is 10)
        $stack->push(20);  // Stack becomes [20, 10] (top is 20)
        $stack->push(30);  // Stack becomes [30, 20, 10] (top is 30)
        
        $this->assertFalse($stack->isEmpty());
        $this->assertEquals(3, $stack->getSize());
        $this->assertEquals(30, $stack->peek(), "Peek should return 30, the top element.");
        
        // Pop element from the stack.
        $popped = $stack->pop();
        $this->assertEquals(30, $popped, "Popped element should be 30.");
        $this->assertEquals(2, $stack->getSize());
        $this->assertEquals(20, $stack->peek(), "After popping, peek should return 20.");
        
        // Pop another element.
        $popped = $stack->pop();
        $this->assertEquals(20, $popped, "Popped element should be 20.");
        $this->assertEquals(1, $stack->getSize());
        $this->assertEquals(10, $stack->peek(), "After popping, peek should return 10.");
        
        // Pop the last element.
        $popped = $stack->pop();
        $this->assertEquals(10, $popped, "Popped element should be 10.");
        $this->assertTrue($stack->isEmpty());
        $this->assertEquals(0, $stack->getSize());
        $this->assertNull($stack->peek(), "Peek should return null when the stack is empty.");
    }

    public function testPrintStack(): void {
        $stack = new LinkedListStack();
        $stack->push(10);
        $stack->push(20);
        $stack->push(30);
        // Capture the printed output using output buffering.
        ob_start();
        $stack->printStack();
        $output = ob_get_clean();
        // Assuming that printList() prints the elements separated by "->" (e.g., "30->20->10->")
        $this->assertEquals("30->20->10->", $output, "Printed output should match expected format.");
    }
}
