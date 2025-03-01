<?php
namespace Tests\LinkedList;

use App\LinkedList\AddNodeAfterKthNodeDll;
use App\LinkedList\DLLNode;
use PHPUnit\Framework\TestCase;

class AddNodeAfterKthNodeDllTest extends TestCase
{
    public function testInsertAfterKOnNonEmptyList()
    {
        $obj = new AddNodeAfterKthNodeDll();

        $node1 = new DLLNode(10);
        $node2 = new DLLNode(20);
        $node3 = new DLLNode(30);
        $node1->next = $node2;
        $node2->prev = $node1;
        $node2->next = $node3;
        $node3->prev = $node2;

        $head = $node1;
        $obj->insertAfterK($head, 1, 25);

        $this->assertEquals(25, $node2->next->value, "Failed to insert node after 1st node");
        $this->assertEquals($node2, $node2->next->prev, "Inserted node's previous pointer is incorrect");
        $this->assertEquals($node3, $node2->next->next, "Inserted node's next pointer is incorrect");
        $this->assertEquals($node2->next, $node3->prev, "Node3's previous pointer should point to the new node");
    }

    public function testInsertAfterKOnSingleNodeList()
    {
        $obj = new AddNodeAfterKthNodeDll();

        $node1 = new DLLNode(10);
        $head = $node1;

        $obj->insertAfterK($head, 0, 20);

        $this->assertEquals(20, $head->next->value, "Failed to insert node after head in single node list");
        $this->assertEquals($head, $head->next->prev, "Inserted node's previous pointer is incorrect");
        $this->assertNull($head->next->next, "Inserted node's next pointer should be null");
    }

    public function testInsertAfterKWithInvalidK()
    {
        $obj = new AddNodeAfterKthNodeDll();

        $node1 = new DLLNode(10);
        $head = $node1;

        $result = $obj->insertAfterK($head, 5, 20);

        $this->assertNull($result, "Inserting at invalid position should return null");
    }

    public function testInsertAfterKWithNegativeK()
    {
        $obj = new AddNodeAfterKthNodeDll();

        $node1 = new DLLNode(10);
        $head = $node1;

        $result = $obj->insertAfterK($head, -1, 20);

        $this->assertNull($result, "Inserting at negative position should return null");
    }

    public function testInsertAfterKWithNullHead()
    {
        $obj = new AddNodeAfterKthNodeDll();
        $head = null;

        $result = $obj->insertAfterK($head, 0, 20);

        $this->assertNull($result, "Inserting into null list should return null");
    }
}
