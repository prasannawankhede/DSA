<?php

namespace Tests\LinkedList;

use PHPUnit\Framework\TestCase;
use App\LinkedList\DeleteMiddleNode;
use App\LinkedList\LLNode;

class DeleteMiddleNodeTest extends TestCase
{
    private function createLinkedList(array $values)
    {
        if (empty($values)) return null;

        $head = new LLNode(array_shift($values));
        $current = $head;

        foreach ($values as $value) {
            $current->next = new LLNode($value);
            $current = $current->next;
        }

        return $head;
    }

    private function linkedListToArray($head)
    {
        $result = [];
        while ($head !== null) {
            $result[] = $head->data;
            $head = $head->next;
        }
        return $result;
    }

    public function testDeleteMiddleNode()
    {
        $deleteMiddleNode = new DeleteMiddleNode();

        // Case 1: Odd-length linked list
        $head = $this->createLinkedList([1, 2, 3, 4, 5]);
        $newHead = $deleteMiddleNode->deleteMiddle($head);
        $this->assertEquals([1, 2, 4, 5], $this->linkedListToArray($newHead));

        // Case 2: Even-length linked list
        $head = $this->createLinkedList([1, 2, 3, 4, 5, 6]);
        $newHead = $deleteMiddleNode->deleteMiddle($head);
        $this->assertEquals([1, 2, 3, 5, 6], $this->linkedListToArray($newHead));

        // Case 3: Single node list
        $head = $this->createLinkedList([1]);
        $newHead = $deleteMiddleNode->deleteMiddle($head);
        $this->assertNull($newHead);

        // Case 4: Two-node list
        // $head = $this->createLinkedList([1, 2]);
        // $newHead = $deleteMiddleNode->deleteMiddle($head);
        // $this->assertEquals([2], $this->linkedListToArray($newHead));

        // Case 5: Empty list
        $head = $this->createLinkedList([]);
        $newHead = $deleteMiddleNode->deleteMiddle($head);
        $this->assertNull($newHead);
    }
}
