<?php

namespace Tests\LinkedList;

use PHPUnit\Framework\TestCase;
use App\LinkedList\DeleteTailDLL;
use App\LinkedList\DLLNode;

class DeleteTailDLLTest extends TestCase
{
    private $deleter;

    protected function setUp(): void
    {
        $this->deleter = new DeleteTailDLL();
    }

    public function testEmptyList()
    {
        $result = $this->deleter->deleteTail(null);
        $this->assertNull($result, "Deleting tail from an empty list should return null");
    }

    public function testSingleElementList()
    {
        $node = new DLLNode(10);
        $result = $this->deleter->deleteTail($node);
        $this->assertNull($result, "Deleting tail from a list with one node should return null");
    }

    public function testTwoElementList()
    {
        $node1 = new DLLNode(10);
        $node2 = new DLLNode(20);
        $node1->next = $node2;
        $node2->prev = $node1;

        $result = $this->deleter->deleteTail($node1);
        $this->assertEquals(10, $result->value);
        $this->assertNull($result->next);
    }

    public function testMultipleElementList()
    {
        $node1 = new DLLNode(10);
        $node2 = new DLLNode(20);
        $node3 = new DLLNode(30);
        $node1->next = $node2;
        $node2->prev = $node1;
        $node2->next = $node3;
        $node3->prev = $node2;

        $result = $this->deleter->deleteTail($node1);
        $this->assertEquals(10, $result->value);
        $this->assertEquals(20, $result->next->value);
        $this->assertNull($result->next->next);
    }

    public function testBackwardLinkAfterDeletion()
    {
        $node1 = new DLLNode(10);
        $node2 = new DLLNode(20);
        $node3 = new DLLNode(30);
        $node1->next = $node2;
        $node2->prev = $node1;
        $node2->next = $node3;
        $node3->prev = $node2;

        $result = $this->deleter->deleteTail($node1);
        $this->assertEquals(20, $result->next->value);
        $this->assertEquals(10, $result->next->prev->value);
        $this->assertNull($result->next->next);
    }
}
