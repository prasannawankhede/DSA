<?php

use App\LinkedList\AppendLinkedList;
use PHPUnit\Framework\TestCase;

class AppendLinkedListTest extends TestCase
{


    public function testAppendOne()
    {
        $obj = new AppendLinkedList();
        $obj->append(10);

        $this->assertEquals(10, $obj->head->value);
        $this->assertEquals(1, $obj->getSize());
    }

    public function testAppendMultiple()
    {
        $obj = new AppendLinkedList();

        $obj->append(10);
        $obj->append(20);
        $obj->append(30);

        $this->assertEquals(3,$obj->getSize());

        $current = $obj->head;

        while($current->next !== null){

            $current = $current->next;
        }
        $this->assertequals(30,$current->value);
    }
}
