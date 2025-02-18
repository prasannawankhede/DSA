<?php

// PHPUnit Test Class
namespace Tests\LinkedList;

use PHPUnit\Framework\TestCase;
use App\LinkedList\LLNode;
use App\LinkedList\LinkedListCycle;

class LinkedListCycleTest extends TestCase {

    public function testCycleDetected(): void {
        $node1 = new LLNode(1);
        $node2 = new LLNode(2);
        $node3 = new LLNode(3);
        $node4 = new LLNode(4);

        $node1->next = $node2;
        $node2->next = $node3;
        $node3->next = $node4;
        $node4->next = $node2; // cycle here

        $cycleDetector = new LinkedListCycle();
        $this->assertTrue($cycleDetector->hasCycle($node1));
    }

    public function testNoCycle(): void {
        $node1 = new LLNode(1);
        $node2 = new LLNode(2);
        $node3 = new LLNode(3);

        $node1->next = $node2;
        $node2->next = $node3;

        $cycleDetector = new LinkedListCycle();
        $this->assertFalse($cycleDetector->hasCycle($node1));
    }

    public function testSingleElementNoCycle(): void {
        $node = new LLNode(1);

        $cycleDetector = new LinkedListCycle();
        $this->assertFalse($cycleDetector->hasCycle($node));
    }

    public function testSingleElementWithCycle(): void {
        $node = new LLNode(1);
        $node->next = $node;

        $cycleDetector = new LinkedListCycle();
        $this->assertTrue($cycleDetector->hasCycle($node));
    }
}