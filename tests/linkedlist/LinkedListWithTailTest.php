<?php
namespace Tests\linkedlist;

use PHPUnit\Framework\TestCase;
use App\linkedlist\LinkedListWithTail;

class LinkedListWithTailTest extends TestCase {

    /**
     * Tests the prepend method on an empty list.
     */
    public function testPrependOnEmptyList(): void {
        $list = new LinkedListWithTail();
        $list->prepend(10);
        $this->assertEquals([10], $list->toArray(), "After prepending on an empty list, toArray() should return [10].");
        $this->assertEquals(10, $list->head->value, "Head value should be 10.");
        $this->assertEquals(10, $list->tail->value, "Tail value should also be 10 for a single-element list.");
        $this->assertEquals(1, $list->size, "Size should be 1.");
    }

    /**
     * Tests the prepend method on a non-empty list.
     */
    public function testPrependOnNonEmptyList(): void {
        $list = new LinkedListWithTail();
        // First, add an element so that the list is non-empty.
        $list->prepend(20);  // List becomes [20]
        // Now prepend a new element.
        $list->prepend(10);  // List should now be [10, 20]
        
        $this->assertEquals([10, 20], $list->toArray(), "After prepending, the list should be [10, 20].");
        $this->assertEquals(10, $list->head->value, "New head should be 10.");
        $this->assertEquals(20, $list->tail->value, "Tail should remain 20.");
        $this->assertEquals(2, $list->size, "Size should be 2.");
    }
}
