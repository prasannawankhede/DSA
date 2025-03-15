<?php
namespace Tests\LinkedList;

use PHPUnit\Framework\TestCase;
use App\LinkedList\DLLNode;
use App\LinkedList\RemoveDuplicatesFromDLL;

class RemoveDuplicatesFromDLLTest extends TestCase
{
    private function createDoublyLinkedList(array $values): ?DLLNode
    {
        if (empty($values)) return null;

        $head = new DLLNode($values[0]);
        $current = $head;

        for ($i = 1; $i < count($values); $i++) {
            $newNode = new DLLNode($values[$i]); // ✅ Correct
            $current->next = $newNode;
            $newNode->prev = $current;
            $current = $newNode;
        }

        return $head;
    }

    private function listToArray(?DLLNode $head): array
    {
        $result = [];
        while ($head !== null) {
            $result[] = $head->value;
            $head = $head->next;
        }
        return $result;
    }

    public function testRemoveDuplicates()
    {
        $dll = new RemoveDuplicatesFromDLL();
        
        $head = $this->createDoublyLinkedList([1, 1, 2, 3, 3, 4, 5, 5]);
        $filteredHead = $dll->filter($head);

        $expected = [1, 2, 3, 4, 5];
        $this->assertEquals($expected, $this->listToArray($filteredHead));
    }

    public function testNoDuplicates()
    {
        $dll = new RemoveDuplicatesFromDLL();
        
        $head = $this->createDoublyLinkedList([1, 2, 3, 4, 5]);
        $filteredHead = $dll->filter($head);

        $expected = [1, 2, 3, 4, 5];
        $this->assertEquals($expected, $this->listToArray($filteredHead));
    }

    public function testAllDuplicates()
    {
        $dll = new RemoveDuplicatesFromDLL();
        
        $head = $this->createDoublyLinkedList([1, 1, 1, 1]);
        $filteredHead = $dll->filter($head);

        $expected = [1];
        $this->assertEquals($expected, $this->listToArray($filteredHead));
    }
}
