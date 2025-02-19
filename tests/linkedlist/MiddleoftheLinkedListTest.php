<?php
namespace Tests\LinkedList;

use PHPUnit\Framework\TestCase;
use App\LinkedList\MiddleoftheLinkedList;
use App\LinkedList\LLNode;

class MiddleoftheLinkedListTest extends TestCase
{
    /**
     * Helper function: Build a linked list from an array.
     */
    private function buildList(array $values)
    {
        if (empty($values)) {
            return null;
        }
        $head = new LLNode(array_shift($values));
        $current = $head;
        foreach ($values as $value) {
            $current->next = new LLNode($value);
            $current = $current->next;
        }
        return $head;
    }

    public function testMiddleOddLength(): void
    {
        $list = $this->buildList([1, 2, 3, 4, 5]);
        $finder = new MiddleoftheLinkedList();
        $middle = $finder->fimdMiddle($list);
        $this->assertEquals(3, $middle->value);
    }

    public function testMiddleEvenLength(): void
    {
        $list = $this->buildList([1, 2, 3, 4, 5, 6]);
        $finder = new MiddleoftheLinkedList();
        $middle = $finder->fimdMiddle($list);
        $this->assertEquals(4, $middle->value);
    }

    public function testSingleElement(): void
    {
        $list = $this->buildList([1]);
        $finder = new MiddleoftheLinkedList();
        $middle = $finder->fimdMiddle($list);
        $this->assertEquals(1, $middle->value);
    }

    public function testEmptyList(): void
    {
        $list = $this->buildList([]);
        $finder = new MiddleoftheLinkedList();
        $middle = $finder->fimdMiddle($list);
        $this->assertNull($middle);
    }
}
