<?php
namespace Tests\LinkedList;

use App\LinkedList\AddNodeAfterGivenNodeDll;
use App\LinkedList\DLLNode;
use PHPUnit\Framework\TestCase;

class AddNodeAfterGivenNodeDllTest extends TestCase
{
    public function testInsertAfterGivenNodeOnNonEmptyList()
    {
        $obj = new AddNodeAfterGivenNodeDll();

        $node1 = new DLLNode(10);
        $node2 = new DLLNode(20);
        $node3 = new DLLNode(30);
        $node1->next = $node2;
        $node2->prev = $node1;
        $node2->next = $node3;
        $node3->prev = $node2;

        $obj->insert($node2, 25);

        $this->assertEquals(25, $node2->next->value, "Failed to insert node after given node");
        $this->assertEquals($node2, $node2->next->prev, "Inserted node's previous pointer is incorrect");
        $this->assertEquals($node3, $node2->next->next, "Inserted node's next pointer is incorrect");
        $this->assertEquals($node2->next, $node3->prev, "Next node's previous pointer should point to the new node");
    }

    public function testInsertAfterGivenNodeOnTail()
    {
        $obj = new AddNodeAfterGivenNodeDll();

        $node1 = new DLLNode(10);
        $node2 = new DLLNode(20);
        $node1->next = $node2;
        $node2->prev = $node1;

        $obj->insert($node2, 30);

        $this->assertEquals(30, $node2->next->value, "Failed to insert node after tail node");
        $this->assertEquals($node2, $node2->next->prev, "Inserted node's previous pointer is incorrect");
        $this->assertNull($node2->next->next, "Inserted node's next pointer should be null");
    }

    public function testInsertAfterGivenNodeOnSingleNodeList()
    {
        $obj = new AddNodeAfterGivenNodeDll();

        $node1 = new DLLNode(10);
        $obj->insert($node1, 20);

        $this->assertEquals(20, $node1->next->value, "Failed to insert node after single node");
        $this->assertEquals($node1, $node1->next->prev, "Inserted node's previous pointer is incorrect");
        $this->assertNull($node1->next->next, "Inserted node's next pointer should be null");
    }

    public function testInsertWithNullNode()
    {
        $obj = new AddNodeAfterGivenNodeDll();
        $result = $obj->insert(null, 20);

        $this->assertNull($result, "Inserting into null node should return null");
    }
}
