<?php

namespace Tests\LinkedList;

use App\LinkedList\DeleteNodeDll;
use App\LinkedList\DLLNode;
use PHPUnit\Framework\TestCase;

class DeleteNodeDllTest extends TestCase
{
    public function testDeleteMiddleNode()
    {
        $node1 = new DLLNode(10);
        $node2 = new DLLNode(20);
        $node3 = new DLLNode(30);
        
        $node1->next = $node2;
        $node2->prev = $node1;
        $node2->next = $node3;
        $node3->prev = $node2;

        $obj = new DeleteNodeDll();
        $obj->deleteNode($node2);

        $this->assertSame($node3, $node1->next);
        $this->assertSame($node1, $node3->prev);
        $this->assertNull($node2->next);
        $this->assertNull($node2->prev);
    }

    public function testDeleteLastNode()
    {
        $node1 = new DLLNode(10);
        $node2 = new DLLNode(20);
        
        $node1->next = $node2;
        $node2->prev = $node1;

        $obj = new DeleteNodeDll();
        $obj->deleteNode($node2);

        $this->assertNull($node1->next);
        $this->assertNull($node2->prev);
    }

    public function testDeleteSingleNode()
    {
        $node1 = new DLLNode(10);

        $obj = new DeleteNodeDll();
        $obj->deleteNode($node1);

        $this->assertNull($node1->next);
        $this->assertNull($node1->prev);
    }
}
