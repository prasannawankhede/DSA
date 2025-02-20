<?php

namespace Tests\LinkedList;

use PHPUnit\Framework\TestCase;
use App\LinkedList\PrePendLinkedList;
use App\LinkedList\LLNode;

class PrePendLinkedListTest extends TestCase
{
    public function testPrependSingleElement()
    {
        $list = new PrePendLinkedList();
        $list->prePend(10);

        $this->assertEquals(10, $list->head->value);
        $this->assertEquals(1, $list->getSize());
    }

    public function testPrependMultipleElements()
    {
        $list = new PrePendLinkedList();
        $list->prePend(10);
        $list->prePend(20);
        $list->prePend(30);

        $this->assertEquals(30, $list->head->value);
        $this->assertEquals(3, $list->getSize());

        $this->assertEquals(20, $list->head->next->value);
        $this->assertEquals(10, $list->head->next->next->value);
    }

    public function testPrependEmptyList()
    {
        $list = new PrePendLinkedList();

        $this->assertNull($list->head);
        $this->assertEquals(0, $list->getSize());

        $list->prePend(5);

        $this->assertEquals(5, $list->head->value);
        $this->assertEquals(1, $list->getSize());
    }
}
