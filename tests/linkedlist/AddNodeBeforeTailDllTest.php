<?php

namespace Tests\LinkedList;

use App\LinkedList\AddNodeBeforeTailDll;
use App\LinkedList\DLLNode;
use PHPUnit\Framework\TestCase;

class AddNodeBeforeTailDllTest extends TestCase
{
    public function testInsertBeforeTailInMiddleList()
    {
        $obj = new AddNodeBeforeTailDll();

        $node1 = new DLLNode(10);
        $node2 = new DLLNode(20);
        $node3 = new DLLNode(30);

        $node1->next = $node2;
        $node2->prev = $node1;
        $node2->next = $node3;
        $node3->prev = $node2;

        $result = $obj->insertBeforeTail($node1, 25);

        $this->assertSame(10, $result->value);
        $this->assertSame(25, $result->next->next->value);
        $this->assertSame(30, $result->next->next->next->value);
        $this->assertSame(25, $node3->prev->value);
    }

    public function testInsertBeforeTailInSingleNodeList()
    {
        $obj = new AddNodeBeforeTailDll();

        $node1 = new DLLNode(10);
        $result = $obj->insertBeforeTail($node1, 5);

        $this->assertSame(10, $result->value);
        $this->assertSame(5, $result->prev->value);
        $this->assertSame(10, $result->prev->next->value);
    }

    public function testInsertBeforeTailInNullList()
    {
        $obj = new AddNodeBeforeTailDll();
        $result = $obj->insertBeforeTail(null, 10);
        $this->assertNull($result);
    }
}
