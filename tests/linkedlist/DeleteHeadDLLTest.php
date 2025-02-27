<?php

namespace Tests\LinkedList;

use PHPUnit\Framework\TestCase;
use App\LinkedList\DeleteHeadDLL;
use App\LinkedList\DLLNode;

class DeleteHeadDLLTest extends TestCase
{
    public function testHead()
    {
        $obj = new DeleteHeadDLL();
        $node1 = new DLLNode(10);
        $node2 = new DLLNode(20);

        $node1->next = $node2;
        $node2->prev = $node1;

        $result = $obj->deleteHead($node1);

        // Corrected assertion method
        $this->assertEquals(20, $result->value);
        $this->assertNull($result->prev); // Ensure the new head's prev is null
    }

    public function testSingleElementList()
    {
        $obj = new DeleteHeadDLL();
        $node1 = new DLLNode(10);

        $result = $obj->deleteHead($node1);

        $this->assertNull($result); // Single element list should return null after deletion
    }

    public function testEmptyList()
    {
        $obj = new DeleteHeadDLL();

        $result = $obj->deleteHead(null);

        $this->assertNull($result); // Empty list should return null
    }

    public function testMultipleNodesList()
    {
        $obj = new DeleteHeadDLL();
        $node1 = new DLLNode(10);
        $node2 = new DLLNode(20);
        $node3 = new DLLNode(30);

        $node1->next = $node2;
        $node2->prev = $node1;
        $node2->next = $node3;
        $node3->prev = $node2;

        $result = $obj->deleteHead($node1);

        $this->assertEquals(20, $result->value);
        $this->assertNull($result->prev);
        $this->assertEquals(30, $result->next->value);
        $this->assertEquals(20, $result->next->prev->value);
    }
}
