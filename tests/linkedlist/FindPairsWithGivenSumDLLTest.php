<?php

namespace Tests\LinkedList;

use PHPUnit\Framework\TestCase;
use App\LinkedList\DLLNode;
use App\LinkedList\FindPairsWithGivenSumDLL;

class FindPairsWithGivenSumDLLTest extends TestCase
{
    private function createDoublyLinkedList(array $values): ?DLLNode
    {
        if (empty($values)) {
            return null;
        }

        $head = new DLLNode($values[0]);
        $current = $head;

        for ($i = 1; $i < count($values); $i++) {
            $newNode = new DLLNode($values[$i]);
            $current->next = $newNode;
            $newNode->prev = $current;
            $current = $newNode;
        }

        return $head;
    }

    public function testFindPairs()
    {
        $dll = new FindPairsWithGivenSumDLL();

        // Creating doubly linked list: 1 <-> 2 <-> 3 <-> 4 <-> 5
        $head = $this->createDoublyLinkedList([1, 2, 3, 4, 5]);

        $result = $dll->findPairs($head, 6);
        $expected = [[1, 5], [2, 4]];

        $this->assertEquals($expected, $result);
    }
}
