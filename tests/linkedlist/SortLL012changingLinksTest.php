<?php
namespace Tests\LinkedList;

use PHPUnit\Framework\TestCase;
use App\LinkedList\LLNode;
use App\LinkedList\SortLL012changingLinks;

class SortLL012changingLinksTest extends TestCase
{
    private function createLinkedList(array $values)
    {
        if (empty($values)) {
            return null;
        }

        $head = new LLNode($values[0]);
        $current = $head;

        for ($i = 1; $i < count($values); $i++) {
            $current->next = new LLNode($values[$i]);
            $current = $current->next;
        }

        return $head;
    }

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
        $sorter = new SortLL012changingLinks();
        $head = $this->createLinkedList([2, 1, 0, 1, 2, 0, 1]);

        $sortedHead = $sorter->sort($head);
        $this->assertEquals([0, 0, 1, 1, 1, 2, 2], $this->linkedListToArray($sortedHead));
    }

    public function testSortAlreadySortedList()
    {
        $sorter = new SortLL012changingLinks();
        $head = $this->createLinkedList([0, 0, 1, 1, 2, 2]);

        $sortedHead = $sorter->sort($head);
        $this->assertEquals([0, 0, 1, 1, 2, 2], $this->linkedListToArray($sortedHead));
    }

    public function testSortReverseSortedList()
    {
        $sorter = new SortLL012changingLinks();
        $head = $this->createLinkedList([2, 2, 1, 1, 0, 0]);

        $sortedHead = $sorter->sort($head);
        $this->assertEquals([0, 0, 1, 1, 2, 2], $this->linkedListToArray($sortedHead));
    }

    public function testSortEmptyList()
    {
        $sorter = new SortLL012changingLinks();
        $sortedHead = $sorter->sort(null);
        $this->assertNull($sortedHead);
    }

    public function testSortSingleNodeList()
    {
        $sorter = new SortLL012changingLinks();
        $head = new LLNode(1);

        $sortedHead = $sorter->sort($head);
        $this->assertEquals([1], $this->linkedListToArray($sortedHead));
    }
}
