<?php

namespace Tests\LinkedList;

use App\LinkedList\AddNodeBeforeGIvenNodeDll;
use App\LinkedList\DLLNode;
use PHPUnit\Framework\TestCase;

class AddNodeBeforeGIvenNodeDllTest extends TestCase
{
    public function testInsertBeforeHead()
    {
        $obj = new AddNodeBeforeGIvenNodeDll();
        $node1 = new DLLNode(10);
        $head = $node1;

        $result = $obj->insertBeforeNode($head, $node1, 5);

        $this->assertEquals(5, $result->value);
        $this->assertSame($node1, $result->next);
        $this->assertSame($result, $node1->prev);
        $this->assertNull($result->prev);
    }

    public function testInsertBeforeMiddleNode()
    {
        $obj = new AddNodeBeforeGIvenNodeDll();
        $node1 = new DLLNode(10);
        $node2 = new DLLNode(20);
        $node3 = new DLLNode(30);
        $node1->next = $node2;
        $node2->prev = $node1;
        $node2->next = $node3;
        $node3->prev = $node2;

        $result = $obj->insertBeforeNode($node1, $node2, 15);

        $this->assertEquals(10, $result->value);
        $this->assertEquals(15, $node1->next->value);
        $this->assertSame($node2, $node1->next->next);
        $this->assertSame($node1->next, $node2->prev);
        $this->assertNull($node1->prev);
    }

    public function testInsertBeforeLastNode()
    {
        $obj = new AddNodeBeforeGIvenNodeDll();
        $node1 = new DLLNode(10);
        $node2 = new DLLNode(20);
        $node1->next = $node2;
        $node2->prev = $node1;

        $result = $obj->insertBeforeNode($node1, $node2, 15);

        $this->assertEquals(10, $result->value);
        $this->assertEquals(15, $node1->next->value);
        $this->assertSame($node2, $node1->next->next);
        $this->assertSame($node1->next, $node2->prev);
        $this->assertNull($node1->prev);
    }

    public function testInsertInEmptyList()
    {
        $obj = new AddNodeBeforeGIvenNodeDll();
        $result = $obj->insertBeforeNode(null, null, 10);
        $this->assertNull($result);
    }
}
