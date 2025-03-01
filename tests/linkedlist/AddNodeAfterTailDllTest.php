<?php
namespace Tests\LinkedList;

use App\LinkedList\AddNodeAfterTailDll;
use App\LinkedList\AddNodeAfterHeadDll;
use App\LinkedList\DLLNode; // Assuming DLLNode is in this namespace
use PHPUnit\Framework\TestCase;

class AddNodeAfterTailDllTest extends TestCase
{
    public function testInsertAfterTailOnNonEmptyList()
    {
        $obj = new AddNodeAfterTailDll();

        $node1 = new DLLNode(10);
        $node2 = new DLLNode(20);
        $node1->next = $node2;
        $node2->prev = $node1;

        $head = $node1;
        $obj->insertAfterTail($head, 30);

        $this->assertEquals(30, $node2->next->value, "Failed to insert node with value 30 at the tail");
        $this->assertEquals($node2, $node2->next->prev, "Tail node's previous pointer is incorrect");
        $this->assertNull($node2->next->next, "Newly inserted node should be the last node");
    }

    public function testInsertAfterTailOnSingleNodeList()
    {
        $obj = new AddNodeAfterTailDll();

        $node1 = new DLLNode(10);
        $head = $node1;

        $obj->insertAfterTail($head, 20);

        $this->assertEquals(20, $head->next->value, "Failed to insert node with value 20 after head in single node list");
        $this->assertEquals($head, $head->next->prev, "Inserted node's previous should point to head");
        $this->assertNull($head->next->next, "Inserted node's next should be null");
    }

    public function testInsertAfterTailWithNullHead()
    {
        $obj = new AddNodeAfterTailDll();
        $head = null;

        $result = $obj->insertAfterTail($head, 20);

        $this->assertNull($result, "Inserting into null list should return null");
    }

    public function testInsertAfterTailMultipleInsertions()
    {
        $obj = new AddNodeAfterTailDll();

        $node1 = new DLLNode(10);
        $head = $node1;

        $obj->insertAfterTail($head, 20);
        $obj->insertAfterTail($head, 30);
        $obj->insertAfterTail($head, 40);

        $this->assertEquals(20, $head->next->value, "First insertion failed");
        $this->assertEquals(30, $head->next->next->value, "Second insertion failed");
        $this->assertEquals(40, $head->next->next->next->value, "Third insertion failed");
        $this->assertNull($head->next->next->next->next, "Last node's next should be null");
    }
}
