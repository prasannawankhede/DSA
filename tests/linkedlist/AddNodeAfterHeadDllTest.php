<?php
namespace Tests\LinkedList;

use App\LinkedList\AddNodeAfterHeadDll;
use App\LinkedList\DLLNode; // Assuming DLLNode is in this namespace
use PHPUnit\Framework\TestCase;

class AddNodeAfterHeadDllTest extends TestCase
{
    public function testInsertAfterHeadOnNonEmptyList()
    {
        $obj = new AddNodeAfterHeadDll();

        $node1 = new DLLNode(10);
        $node2 = new DLLNode(30);

        $node1->next = $node2;
        $node2->prev = $node1;

        $head = $node1;

        $result = $obj->insertAfterHead($head, 20);

        $this->assertEquals(20, $head->next->value, "Failed to insert node with value 20 after head");
        $this->assertEquals($node2, $head->next->next, "Next node should be node2");
        $this->assertEquals($head->next, $node2->prev, "Node2's previous node should be the newly inserted node");
    }

    public function testInsertAfterHeadOnSingleNodeList()
    {
        $obj = new AddNodeAfterHeadDll();

        $node1 = new DLLNode(10);
        $head = $node1;

        $result = $obj->insertAfterHead($head, 20);

        $this->assertEquals(20, $head->next->value, "Failed to insert node with value 20 after head in single node list");
        $this->assertEquals($head, $head->next->prev, "Inserted node's previous should point to head");
        $this->assertNull($head->next->next, "Inserted node's next should be null");
    }

    public function testInsertAfterHeadWithNullHead()
    {
        $obj = new AddNodeAfterHeadDll();
        $head = null;

        $result = $obj->insertAfterHead($head, 20);

        $this->assertNull($result, "Inserting into null list should return null");
    }

    public function testInsertAfterHeadMultipleInsertions()
    {
        $obj = new AddNodeAfterHeadDll();

        $node1 = new DLLNode(10);
        $head = $node1;

        $obj->insertAfterHead($head, 20);
        $obj->insertAfterHead($head, 30);
        $obj->insertAfterHead($head, 40);

        $this->assertEquals(40, $head->next->value, "First insertion failed");
        $this->assertEquals(30, $head->next->next->value, "Second insertion failed");
        $this->assertEquals(20, $head->next->next->next->value, "Third insertion failed");
        $this->assertNull($head->next->next->next->next, "Last node's next should be null");
    }
}
