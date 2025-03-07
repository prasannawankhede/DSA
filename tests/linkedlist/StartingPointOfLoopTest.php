<?php

namespace Tests\LinkedList;

use PHPUnit\Framework\TestCase;
use App\LinkedList\LLNode;
use App\LinkedList\StartingPointOfLoop;

class StartingPointOfLoopTest extends TestCase
{
    public function testFindLoopStartingPoint()
    {
        $node1 = new LLNode(1);
        $node2 = new LLNode(2);
        $node3 = new LLNode(3);
        $node4 = new LLNode(4);
        $node5 = new LLNode(5);

        $node1->next = $node2;
        $node2->next = $node3;
        $node3->next = $node4;
        $node4->next = $node5;
        $node5->next = $node3; // Loop starts at node3

        $loopFinder = new StartingPointOfLoop();
        $result = $loopFinder->find($node1);

        $this->assertSame($node3, $result);
    }

    public function testNoLoop()
    {
        $node1 = new LLNode(1);
        $node2 = new LLNode(2);
        $node3 = new LLNode(3);

        $node1->next = $node2;
        $node2->next = $node3;
        $node3->next = null;

        $loopFinder = new StartingPointOfLoop();
        $result = $loopFinder->find($node1);

        $this->assertFalse($result);
    }
}
