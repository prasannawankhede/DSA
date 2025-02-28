<?php
namespace Tests\LinkedList;

use App\LinkedList\AddNodeBeforeHeadDll;
use App\LinkedList\DLLNode;
use PHPUnit\Framework\TestCase;

class AddNodeBeforeHeadDllTest extends TestCase
{
    public function testInsertAtFrontWithNonEmptyList()
    {
        $obj = new AddNodeBeforeHeadDll();

        $node1 = new DLLNode(4);
        $node2 = new DLLNode(10);
        $node3 = new DLLNode(3);
        $node4 = new DLLNode(5);

        $node1->next = $node2;
        $node2->prev = $node1;
        $node2->next = $node3;
        $node3->prev = $node2;
        $node3->next = $node4;
        $node4->prev = $node3;

        $newHead = $obj->insertAtFront($node1, 20);

        $this->assertSame(20, $newHead->value);
        $this->assertSame($node1, $newHead->next);
        $this->assertSame($newHead, $node1->prev);
    }

    public function testInsertAtFrontWithEmptyList()
    {
        $obj = new AddNodeBeforeHeadDll();

        $newHead = $obj->insertAtFront(null, 5);

        $this->assertSame(5, $newHead->value);
        $this->assertNull($newHead->next);
        $this->assertNull($newHead->prev);
    }
}
