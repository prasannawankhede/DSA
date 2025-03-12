<?php

namespace Tests\LinkedList;

use PHPUnit\Framework\TestCase;
use App\LinkedList\SortLinkedList;
use App\LinkedList\LLNode;

class SortLinkedListTest extends TestCase
{
    // Helper function to create a linked list from an array
    private function createLinkedList(array $values)
    {
        if (empty($values)) return null;

        $head = new LLNode($values[0]);
        $current = $head;

        for ($i = 1; $i < count($values); $i++) {
            $current->next = new LLNode($values[$i]);
            $current = $current->next;
        }
        return $head;
    }

    // Helper function to convert a linked list to an array
    private function linkedListToArray($head)
    {
        $result = [];
        while ($head !== null) {
            $result[] = $head->value;
            $head = $head->next;
        }
        return $result;
    }

    public function testSortUnsortedList()
    {
        $list = $this->createLinkedList([4, 2, 1, 3]);
        $sorter = new SortLinkedList();
        $sortedList = $sorter->sort($list);
        
        $this->assertEquals([1, 2, 3, 4], $this->linkedListToArray($sortedList));
    }

    public function testSortAlreadySortedList()
    {
        $list = $this->createLinkedList([1, 2, 3, 4, 5]);
        $sorter = new SortLinkedList();
        $sortedList = $sorter->sort($list);

        $this->assertEquals([1, 2, 3, 4, 5], $this->linkedListToArray($sortedList));
    }

    public function testSortReversedList()
    {
        $list = $this->createLinkedList([5, 4, 3, 2, 1]);
        $sorter = new SortLinkedList();
        $sortedList = $sorter->sort($list);

        $this->assertEquals([1, 2, 3, 4, 5], $this->linkedListToArray($sortedList));
    }

    public function testSortListWithDuplicates()
    {
        $list = $this->createLinkedList([3, 1, 2, 3, 3, 4, 1]);
        $sorter = new SortLinkedList();
        $sortedList = $sorter->sort($list);

        $this->assertEquals([1, 1, 2, 3, 3, 3, 4], $this->linkedListToArray($sortedList));
    }

    public function testSortEmptyList()
    {
        $list = $this->createLinkedList([]);
        $sorter = new SortLinkedList();
        $sortedList = $sorter->sort($list);

        $this->assertEquals([], $this->linkedListToArray($sortedList));
    }

    public function testSortSingleNodeList()
    {
        $list = $this->createLinkedList([7]);
        $sorter = new SortLinkedList();
        $sortedList = $sorter->sort($list);

        $this->assertEquals([7], $this->linkedListToArray($sortedList));
    }
}
