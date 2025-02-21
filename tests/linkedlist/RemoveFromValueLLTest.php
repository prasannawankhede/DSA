<?php

namespace Tests\LinkedList;

use App\LinkedList\RemoveFromValueLL;
use App\LinkedList\LLNode;
use PHPUnit\Framework\TestCase;

class RemoveFromValueLLTest extends TestCase
{
    private function createLinkedList(array $values)
    {
        $list = new RemoveFromValueLL();

        foreach ($values as $value) {
            $node = new LLNode($value);

            if ($list->head === null) {
                $list->head = $node;
            } else {
                $current = $list->head;
                while ($current->next !== null) {
                    $current = $current->next;
                }
                $current->next = $node;
            }
            $list->size++;
        }

        return $list;
    }

    public function testRemoveHead()
    {
        $list = $this->createLinkedList([10, 20, 30]);
        $removed = $list->removevalue(10);

        $this->assertEquals(10, $removed, "Head value should be removed");
        $this->assertEquals(2, $list->getSize(), "Size should be reduced to 2");
        $this->assertEquals(20, $list->head->value, "New head should be 20");
    }

    public function testRemoveMiddle()
    {
        $list = $this->createLinkedList([10, 20, 30]);
        $removed = $list->removevalue(20);

        $this->assertEquals(20, $removed, "Middle value should be removed");
        $this->assertEquals(2, $list->getSize(), "Size should be reduced to 2");
        $this->assertEquals(10, $list->head->value, "Head should remain the same");
        $this->assertEquals(30, $list->head->next->value, "Next node should be 30");
    }

    public function testRemoveTail()
    {
        $list = $this->createLinkedList([10, 20, 30]);
        $removed = $list->removevalue(30);

        $this->assertEquals(30, $removed, "Tail value should be removed");
        $this->assertEquals(2, $list->getSize(), "Size should be reduced to 2");
        $this->assertNull($list->head->next->next, "Last node should be null");
    }

    public function testRemoveNonExistentValue()
    {
        $list = $this->createLinkedList([10, 20, 30]);
        $removed = $list->removevalue(40);

        $this->assertNull($removed, "Non-existent value should return null");
        $this->assertEquals(3, $list->getSize(), "Size should remain unchanged");
    }

    public function testRemoveFromEmptyList()
    {
        $list = new RemoveFromValueLL();
        $removed = $list->removevalue(10);

        $this->assertNull($removed, "Removing from empty list should return null");
        $this->assertEquals(0, $list->getSize(), "Size should remain 0");
    }
}
