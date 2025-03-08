<?php

namespace Tests\LinkedList;

use PHPUnit\Framework\TestCase;
use App\LinkedList\OddEvenLinkedList;
use App\LinkedList\LLNode;

class OddEvenLinkedListTest extends TestCase {
    public function createLinkedList(array $values) {
        if (empty($values)) return null;

        $head = new LLNode(array_shift($values));
        $current = $head;

        foreach ($values as $value) {
            $current->next = new LLNode($value);
            $current = $current->next;
        }

        return $head;
    }

    public function linkedListToArray($head) {
        $result = [];
        while ($head !== null) {
            $result[] = $head->value;
            $head = $head->next;
        }
        return $result;
    }

    public function testOddEvenSorting() {
        $list = $this->createLinkedList([1, 2, 3, 4, 5]);
        $oddEvenLinkedList = new OddEvenLinkedList();
        $sortedList = $oddEvenLinkedList->sort($list);

        $this->assertEquals([1, 3, 5, 2, 4], $this->linkedListToArray($sortedList));
    }

    public function testSingleElement() {
        $list = $this->createLinkedList([1]);
        $oddEvenLinkedList = new OddEvenLinkedList();
        $sortedList = $oddEvenLinkedList->sort($list);

        $this->assertEquals([1], $this->linkedListToArray($sortedList));
    }

    public function testTwoElements() {
        $list = $this->createLinkedList([1, 2]);
        $oddEvenLinkedList = new OddEvenLinkedList();
        $sortedList = $oddEvenLinkedList->sort($list);

        $this->assertEquals([1, 2], $this->linkedListToArray($sortedList));
    }

    public function testEmptyList() {
        $list = $this->createLinkedList([]);
        $oddEvenLinkedList = new OddEvenLinkedList();
        $sortedList = $oddEvenLinkedList->sort($list);

        $this->assertNull($sortedList);
    }
}
