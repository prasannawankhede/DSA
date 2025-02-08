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
        // Since we prepend, the expected list is [30, 20, 10]
        $this->assertEquals(3, $this->list->getSize());
        $this->assertEquals([30, 20, 10], $this->list->toArray());
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
     * Tests the output of printList() when the list has multiple elements.
     *
     * @return void
     */
    public function testPrintNonEmptyList(): void
    {
        $this->list->prepend(10);
        $this->list->prepend(20);
        $this->list->prepend(30);
        // Expected printed output: "30->20->10->"
        $this->expectOutputString("30->20->10->");
        $this->list->printList();
    }
}
