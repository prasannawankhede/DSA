<?php
namespace Tests\LinkedList;

use App\LinkedList\DeleteKthNodeDll;
use App\LinkedList\DLLNode;
use PHPUnit\Framework\TestCase;

class DeleteKthNodeDllTest extends TestCase
{
    public function testSimple()
    {
        $obj = new DeleteKthNodeDll();

        $node1 = new DLLNode(10);
        $node2 = new DLLNode(20);
        $node3 = new DLLNode(30);

        $node1->next = $node2;
        $node2->prev = $node1;
        $node2->next = $node3;
        $node3->prev = $node2;

        $result = $obj->removeNode($node1, 2);

        // Ensure node2 is removed
        $this->assertSame($node3, $node1->next);
        $this->assertSame($node1, $node3->prev);
        $this->assertNull($node3->next);
    }

    public function testRemoveHead()
    {
        $obj = new DeleteKthNodeDll();

        $node1 = new DLLNode(10);
        $node2 = new DLLNode(20);
        $node3 = new DLLNode(30);

        $node1->next = $node2;
        $node2->prev = $node1;
        $node2->next = $node3;
        $node3->prev = $node2;

        $result = $obj->removeNode($node1, 1);

        $this->assertSame($node2, $result);
        $this->assertNull($node2->prev);
        $this->assertSame($node3, $node2->next);
    }

    public function testRemoveTail()
    {
        $obj = new DeleteKthNodeDll();

        $node1 = new DLLNode(10);
        $node2 = new DLLNode(20);
        $node3 = new DLLNode(30);

        $node1->next = $node2;
        $node2->prev = $node1;
        $node2->next = $node3;
        $node3->prev = $node2;

        $result = $obj->removeNode($node1, 3);

        $this->assertSame($node2, $node1->next);
        $this->assertNull($node2->next);
    }

    public function testSingleNode()
    {
        $obj = new DeleteKthNodeDll();

        $node1 = new DLLNode(10);

        $result = $obj->removeNode($node1, 1);

        $this->assertNull($result);
    }

    public function testOutOfBounds()
    {
        $obj = new DeleteKthNodeDll();

        $node1 = new DLLNode(10);
        $node2 = new DLLNode(20);

        $node1->next = $node2;
        $node2->prev = $node1;

        $result = $obj->removeNode($node1, 3);

        $this->assertSame($node1, $result);
        $this->assertSame($node2, $node1->next);
        $this->assertSame($node1, $node2->prev);
    }
}
