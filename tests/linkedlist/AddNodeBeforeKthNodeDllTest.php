<?php

namespace Tests\LinkedList;

use App\LinkedList\AddNodeBeforeKthNodeDll;
use App\LinkedList\DLLNode;
use PHPUnit\Framework\TestCase;

class AddNodeBeforeKthNodeDllTest extends TestCase
{
    public function testInsertBeforeMiddleNode()
    {
        $obj = new AddNodeBeforeKthNodeDll();

        $node1 = new DLLNode(10);
        $node2 = new DLLNode(20);
        $node3 = new DLLNode(30);

        $node1->next = $node2;
        $node2->prev = $node1;
        $node2->next = $node3;
        $node3->prev = $node2;

        $head = $obj->insertBeforeK($node1, 2, 15);

        $this->assertSame(10, $head->value);
        $this->assertSame(15, $head->next->value);
        $this->assertSame(20, $head->next->next->value);
        $this->assertSame(30, $head->next->next->next->value);
    }

    public function testInsertBeforeHeadNode()
    {
        $obj = new AddNodeBeforeKthNodeDll();

        $node1 = new DLLNode(10);
        $node2 = new DLLNode(20);

        $node1->next = $node2;
        $node2->prev = $node1;

        $head = $obj->insertBeforeK($node1, 1, 5);

        $this->assertSame(5, $head->value);
        $this->assertSame(10, $head->next->value);
        $this->assertSame(20, $head->next->next->value);
    }

    public function testInsertBeforeLastNode()
    {
        $obj = new AddNodeBeforeKthNodeDll();

        $node1 = new DLLNode(10);
        $node2 = new DLLNode(20);
        $node3 = new DLLNode(30);

        $node1->next = $node2;
        $node2->prev = $node1;
        $node2->next = $node3;
        $node3->prev = $node2;

        $head = $obj->insertBeforeK($node1, 3, 25);

        $this->assertSame(10, $head->value);
        $this->assertSame(20, $head->next->value);
        $this->assertSame(25, $head->next->next->value);
        $this->assertSame(30, $head->next->next->next->value);
    }

    public function testEmptyList()
    {
        $obj = new AddNodeBeforeKthNodeDll();

        $head = $obj->insertBeforeK(null, 1, 5);

        $this->assertNull($head);
    }
}
