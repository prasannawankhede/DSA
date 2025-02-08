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
