<?php

use PHPUnit\Framework\TestCase;
use App\LinkedList\LLNode;
use App\LinkedList\FindIntersectionPointYLLBetter;

class FindIntersectionPointYLLBetterTest extends TestCase
{
    public function testFindIntersection()
    {
        $finder = new FindIntersectionPointYLLBetter();

        // Create two linked lists with an intersection
        $common = new LLNode(8);
        $common->next = new LLNode(10);

        $list1 = new LLNode(3);
        $list1->next = new LLNode(6);
        $list1->next->next = new LLNode(9);
        $list1->next->next->next = $common; // Intersection

        $list2 = new LLNode(4);
        $list2->next = $common; // Intersection

        $result = $finder->traverse($list1, $list2);
        $this->assertSame($common, $result);
    }

    public function testNoIntersection()
    {
        $finder = new FindIntersectionPointYLLBetter();

        // Create two completely separate linked lists
        $list1 = new LLNode(1);
        $list1->next = new LLNode(2);
        $list1->next->next = new LLNode(3);

        $list2 = new LLNode(4);
        $list2->next = new LLNode(5);
        $list2->next->next = new LLNode(6);

        $result = $finder->traverse($list1, $list2);
        $this->assertNull($result);
    }

    public function testOneListIsNull()
    {
        $finder = new FindIntersectionPointYLLBetter();

        $list1 = new LLNode(1);
        $list1->next = new LLNode(2);
        $list1->next->next = new LLNode(3);

        $result = $finder->traverse($list1, null);
        $this->assertNull($result);
    }

    public function testBothListsAreNull()
    {
        $finder = new FindIntersectionPointYLLBetter();
        $result = $finder->traverse(null, null);
        $this->assertNull($result);
    }
}
