<?php
namespace Test\LinkedList;

use App\LinkedList\AddTwoNumbers;
use App\LinkedList\LLNode;
use PHPUnit\Framework\TestCase;

class AddTwoNumbersTest extends TestCase
{
    public function testAddLists()
    {
        $obj = new AddTwoNumbers();

        // Case 1: (2 -> 4 -> 3) + (5 -> 6 -> 4) = (7 -> 0 -> 8)
        $l1 = new LLNode(2, new LLNode(4, new LLNode(3)));
        $l2 = new LLNode(5, new LLNode(6, new LLNode(4)));
        $result = $obj->addLists($l1, $l2);
        $this->assertEquals([7, 0, 8], $this->linkedListToArray($result));

        // Case 2: (0) + (0) = (0)
        $l1 = new LLNode(0);
        $l2 = new LLNode(0);
        $result = $obj->addLists($l1, $l2);
        $this->assertEquals([0], $this->linkedListToArray($result));

        // Case 3: (9 -> 9 -> 9 -> 9 -> 9 -> 9 -> 9) + (9 -> 9 -> 9 -> 9) = (8 -> 9 -> 9 -> 9 -> 0 -> 0 -> 0 -> 1)
        $l1 = new LLNode(9, new LLNode(9, new LLNode(9, new LLNode(9, new LLNode(9, new LLNode(9, new LLNode(9)))))));
        $l2 = new LLNode(9, new LLNode(9, new LLNode(9, new LLNode(9))));
        $result = $obj->addLists($l1, $l2);
        $this->assertEquals([8, 9, 9, 9, 0, 0, 0, 1], $this->linkedListToArray($result));
    }

    private function linkedListToArray($node)
    {
        $result = [];
        while ($node !== null) {
            $result[] = $node->value;
            $node = $node->next;
        }
        return $result;
    }
}
