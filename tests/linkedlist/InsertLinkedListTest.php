<?php

namespace Tests\LinkedList;

use App\LinkedList\InsertLinkedList;
use PHPUnit\Framework\TestCase;

class InsertLinkedListTest extends TestCase
{
    public function testInsertAtBeginning()
    {
        $list = new InsertLinkedList();
        $list->insert(0, 10);

        $this->assertEquals(10, $list->head->value, "Head should be 10");
        $this->assertEquals(1, $list->getSize(), "Size should be 1");
    }

    public function testInsertInMiddle()
    {
        $list = new InsertLinkedList();
        $list->insert(0, 10);
        $list->insert(1, 20);
        $list->insert(1, 15); // Insert 15 at index 1

        $this->assertEquals(3, $list->getSize(), "Size should be 3");
        $this->assertEquals(10, $list->head->value);
        $this->assertEquals(15, $list->head->next->value);
        $this->assertEquals(20, $list->head->next->next->value);
    }
}
