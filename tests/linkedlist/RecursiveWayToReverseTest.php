<?php

namespace Tests\LinkedList;

use App\LinkedList\RecursiveWayToReverse;
use PHPUnit\Framework\TestCase;

class RecursiveWayToReverseTest extends TestCase
{
    private $list;

    protected function setUp(): void
    {
        $this->list = new RecursiveWayToReverse(1);
        $this->list->next = new RecursiveWayToReverse(2);
        $this->list->next->next = new RecursiveWayToReverse(3);
        $this->list->next->next->next = new RecursiveWayToReverse(4);
    }

    public function testReverseLinkedList()
    {
        $reversed = $this->list->reverseLinkedList($this->list);

        $this->assertEquals(4, $reversed->value);
        $this->assertEquals(3, $reversed->next->value);
        $this->assertEquals(2, $reversed->next->next->value);
        $this->assertEquals(1, $reversed->next->next->next->value);
        $this->assertNull($reversed->next->next->next->next);
    }

    public function testReverseSingleElementList()
    {
        $single = new RecursiveWayToReverse(1);
        $reversed = $single->reverseLinkedList($single);

        $this->assertEquals(1, $reversed->value);
        $this->assertNull($reversed->next);
    }

    public function testReverseEmptyList()
    {
        $reversed = $this->list->reverseLinkedList(null);
        $this->assertNull($reversed);
    }
}
