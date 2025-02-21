<?php
namespace Tests\LinkedList;

use App\LinkedList\SearchLL;
use PHPUnit\Framework\TestCase;

class SearchLLTest extends TestCase
{

    private function createLinkedList(array $values)
    {
        $list = new SearchLL(); // Create a new SearchLL instance
    
        foreach ($values as $value) {
            $list->addNode($value); // ✅ Use addNode() from LinkedListBase
        }
        
        return $list;
    }
    
    public function testSearchHead()
    {
        $list = $this->createLinkedList([10, 20, 30]);
        $this->assertEquals(0, $list->search(10), "Head value should be found at index 0");
    }

    public function testSearchMiddle()
    {
        $list = $this->createLinkedList([10, 20, 30]);
        $this->assertEquals(1, $list->search(20), "Middle value should be found at index 1");
    }

    public function testSearchTail()
    {
        $list = $this->createLinkedList([10, 20, 30]);
        $this->assertEquals(2, $list->search(30), "Tail value should be found at index 2");
    }

    public function testSearchNonExistent()
    {
        $list = $this->createLinkedList([10, 20, 30]);
        $this->assertEquals(-1, $list->search(40), "Non-existent value should return -1");
    }

    public function testSearchEmptyList()
    {
        $list = new SearchLL();
        $this->assertEquals(-1, $list->search(10), "Searching in an empty list should return -1");
    }

}
