<?php
namespace Tests\linkedlist;

use App\linkedlist\LinkedListWithTail;
use PHPUnit\Framework\TestCase;

class LinkedListWithTailTest extends TestCase
{

    /**
     * Tests the prepend method on an empty list.
     */
    public function testPrependOnEmptyList(): void
    {
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
    public function testPrependOnNonEmptyList(): void
    {
        $list = new LinkedListWithTail();
                            // First, add an element so that the list is non-empty.
        $list->prepend(20); // List becomes [20]
                            // Now prepend a new element.
        $list->prepend(10); // List should now be [10, 20]

        $this->assertEquals([10, 20], $list->toArray(), "After prepending, the list should be [10, 20].");
        $this->assertEquals(10, $list->head->value, "New head should be 10.");
        $this->assertEquals(20, $list->tail->value, "Tail should remain 20.");
        $this->assertEquals(2, $list->size, "Size should be 2.");
    }

    public function testAppendWithTailOnEmptyList(): void
    {
        $list = new LinkedListWithTail();
        $list->appendWithTail(10);

        // Check the array representation
        $this->assertEquals([10], $list->toArray(), "toArray() should return [10] after appending on an empty list.");
        // Check that head and tail both have the value 10.
        $this->assertEquals(10, $list->head->value, "Head value should be 10.");
        $this->assertEquals(10, $list->tail->value, "Tail value should be 10 for a single-element list.");
        // Check that the size is 1.
        $this->assertEquals(1, $list->size, "Size should be 1.");
    }

    /**
     * Tests appendWithTail on a non-empty list.
     */
    public function testAppendWithTailOnNonEmptyList(): void
    {
        $list = new LinkedListWithTail();
                                   // First, add some elements using appendWithTail.
        $list->appendWithTail(30); // List: [30] → head = 30, tail = 30
        $list->appendWithTail(40); // List: [30, 40] → tail becomes 40
        $list->appendWithTail(50); // List: [30, 40, 50] → tail becomes 50

        // Check the array representation.
        $this->assertEquals([30, 40, 50], $list->toArray(), "toArray() should return [30,40,50].");
        // Check head value remains unchanged.
        $this->assertEquals(30, $list->head->value, "Head value should be 30.");
        // Check that tail is updated to the new element.
        $this->assertEquals(50, $list->tail->value, "Tail value should be 50.");
        // Check that the size is updated.
        $this->assertEquals(3, $list->size, "Size should be 3.");
    }

}
