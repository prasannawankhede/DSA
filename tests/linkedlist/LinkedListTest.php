<?php

namespace Tests\linkedlist;

use PHPUnit\Framework\TestCase;
use App\linkedlist\LinkedList;

class LinkedListTest extends TestCase
{
    /**
     * @var LinkedList
     */
    private $list;

    /**
     * Sets up the linked list instance before each test.
     *
     * @return void
     */
    protected function setUp(): void
    {
        $this->list = new LinkedList();
    }

    /**
     * Tests that a new linked list is empty.
     *
     * @return void
     */
    public function testEmptyList(): void
    {
        $this->assertTrue($this->list->isEmpty());
        $this->assertEquals(0, $this->list->getSize());
        $this->assertEquals([], $this->list->toArray());
    }

    /**
     * Tests prepending one element to the linked list.
     *
     * @return void
     */
    public function testPrependOneElement(): void
    {
        $this->list->prepend(10);
        $this->assertFalse($this->list->isEmpty());
        $this->assertEquals(1, $this->list->getSize());
        $this->assertEquals([10], $this->list->toArray());
    }

    /**
     * Tests prepending multiple elements to the linked list.
     *
     * @return void
     */
    public function testPrependMultipleElements(): void
    {
        $this->list->prepend(10);
        $this->list->prepend(20);
        $this->list->prepend(30);
        // Since we prepend, the expected list order is [30, 20, 10]
        $this->assertEquals(3, $this->list->getSize());
        $this->assertEquals([30, 20, 10], $this->list->toArray());
    }

    /**
     * Tests appending one element to the linked list.
     *
     * @return void
     */
    public function testAppendOneElement(): void
    {
        $this->list->append(10);
        $this->assertFalse($this->list->isEmpty());
        $this->assertEquals(1, $this->list->getSize());
        $this->assertEquals([10], $this->list->toArray());
    }

    /**
     * Tests appending multiple elements to the linked list.
     *
     * @return void
     */
    public function testAppendMultipleElements(): void
    {
        $this->list->append(10);
        $this->list->append(20);
        $this->list->append(30);
        // Since we append, the expected list order is [10, 20, 30]
        $this->assertEquals(3, $this->list->getSize());
        $this->assertEquals([10, 20, 30], $this->list->toArray());
    }

    /**
     * Tests inserting an element at the beginning of the list.
     *
     * @return void
     */
    public function testInsertAtBeginning(): void
    {
        // Inserting at index 0 should work like prepend.
        $this->list->append(20);
        $this->list->insert(10, 0);
        $this->assertEquals(2, $this->list->getSize());
        // Expected order: [10, 20]
        $this->assertEquals([10, 20], $this->list->toArray());
    }

    /**
     * Tests inserting an element in the middle of the list.
     *
     * @return void
     */
    public function testInsertAtMiddle(): void
    {
        $this->list->append(10);
        $this->list->append(30);
        $this->list->insert(20, 1);
        $this->assertEquals(3, $this->list->getSize());
        // Expected order: [10, 20, 30]
        $this->assertEquals([10, 20, 30], $this->list->toArray());
    }

    /**
     * Tests inserting an element at the end of the list.
     *
     * @return void
     */
    public function testInsertAtEnd(): void
    {
        $this->list->append(10);
        $this->list->append(20);
        // Inserting at index equal to the current size should add to the end.
        $this->list->insert(30, $this->list->getSize());
        $this->assertEquals(3, $this->list->getSize());
        // Expected order: [10, 20, 30]
        $this->assertEquals([10, 20, 30], $this->list->toArray());
    }

    /**
     * Tests removing an element from the beginning of the list using removeValue().
     *
     * @return void
     */
    public function testRemoveValueFromHead(): void
    {
        $this->list->append(10);
        $this->list->append(20);
        $this->list->append(30);
        $removed = $this->list->removeValue(10);
        $this->assertEquals(10, $removed);
        $this->assertEquals(2, $this->list->getSize());
        $this->assertEquals([20, 30], $this->list->toArray());
    }

    /**
     * Tests removing an element from the middle of the list using removeValue().
     *
     * @return void
     */
    public function testRemoveValueFromMiddle(): void
    {
        $this->list->append(10);
        $this->list->append(20);
        $this->list->append(30);
        $removed = $this->list->removeValue(20);
        $this->assertEquals(20, $removed);
        $this->assertEquals(2, $this->list->getSize());
        $this->assertEquals([10, 30], $this->list->toArray());
    }

    /**
     * Tests removing an element from the tail of the list using removeValue().
     *
     * @return void
     */
    public function testRemoveValueFromTail(): void
    {
        $this->list->append(10);
        $this->list->append(20);
        $this->list->append(30);
        $removed = $this->list->removeValue(30);
        $this->assertEquals(30, $removed);
        $this->assertEquals(2, $this->list->getSize());
        $this->assertEquals([10, 20], $this->list->toArray());
    }

    /**
     * Tests attempting to remove a value that does not exist using removeValue().
     *
     * @return void
     */
    public function testRemoveValueNotFound(): void
    {
        $this->list->append(10);
        $this->list->append(20);
        $this->list->append(30);
        $removed = $this->list->removeValue(99);
        $this->assertNull($removed);
        // Size should remain unchanged.
        $this->assertEquals(3, $this->list->getSize());
        $this->assertEquals([10, 20, 30], $this->list->toArray());
    }

    /**
     * Tests attempting to remove a value from an empty list using removeValue().
     *
     * @return void
     */
    public function testRemoveValueFromEmptyList(): void
    {
        $removed = $this->list->removeValue(10);
        $this->assertNull($removed);
        $this->assertEquals(0, $this->list->getSize());
        $this->assertEquals([], $this->list->toArray());
    }

    /**
     * Tests the output of printList() when the list is empty.
     *
     * @return void
     */
    public function testPrintEmptyList(): void
    {
        $this->expectOutputString("List is empty");
        $this->list->printList();
    }

    /**
     * Tests the output of printList() when the list has multiple elements appended.
     *
     * @return void
     */
    public function testPrintNonEmptyList(): void
    {
        $this->list->append(10);
        $this->list->append(20);
        $this->list->append(30);
        // Expected printed output: "10->20->30->"
        $this->expectOutputString("10->20->30->");
        $this->list->printList();
    }
}
