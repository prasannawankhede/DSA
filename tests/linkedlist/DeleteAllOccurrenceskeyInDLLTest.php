<?php
namespace Tests\LinkedList;

use PHPUnit\Framework\TestCase;
use App\LinkedList\DLLNode;
use App\LinkedList\DeleteAllOccurrenceskeyInDLL;

class DeleteAllOccurrenceskeyInDLLTest extends TestCase
{
    private function createDoublyLinkedList(array $values)
{
    if (empty($values)) return null;

    $head = new DLLNode(array_shift($values));
    $current = $head;

    foreach ($values as $value) {
        $newNode = new DLLNode($value);
        $current->next = $newNode;
        $newNode->prev = $current;
        $current = $newNode;
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

    public function testRemoveOccurrences()
    {
        $list = $this->createDoublyLinkedList([1, 2, 3, 2, 4, 2, 5]);
        $dll = new DeleteAllOccurrenceskeyInDLL();
        
        $updatedHead = $dll->remove($list, 2);
        
        $this->assertEquals([1, 3, 4, 5], $this->linkedListToArray($updatedHead));
    }

    public function testRemoveHeadNode()
    {
        $list = $this->createDoublyLinkedList([3, 3, 3, 4, 5]);
        $dll = new DeleteAllOccurrenceskeyInDLL();
        
        $updatedHead = $dll->remove($list, 3);
        
        $this->assertEquals([4, 5], $this->linkedListToArray($updatedHead));
    }

    public function testRemoveAllNodes()
    {
        $list = $this->createDoublyLinkedList([7, 7, 7, 7]);
        $dll = new DeleteAllOccurrenceskeyInDLL();
        
        $updatedHead = $dll->remove($list, 7);
        
        $this->assertNull($updatedHead);
    }

    public function testRemoveNonExistingElement()
    {
        $list = $this->createDoublyLinkedList([1, 2, 3, 4, 5]);
        $dll = new DeleteAllOccurrenceskeyInDLL();
        
        $updatedHead = $dll->remove($list, 10);
        
        $this->assertEquals([1, 2, 3, 4, 5], $this->linkedListToArray($updatedHead));
    }
}
