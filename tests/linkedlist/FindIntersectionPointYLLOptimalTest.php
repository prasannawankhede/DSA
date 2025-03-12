<?php

namespace Tests\LinkedList;

use PHPUnit\Framework\TestCase;
use App\LinkedList\FindIntersectionPointYLLOptimal;

class LLNode {
    public $val;
    public $next;
    public function __construct($val) {
        $this->val = $val;
        $this->next = null;
    }
}

class FindIntersectionPointYLLOptimalTest extends TestCase {
    
    private function createLinkedList(array $values) {
        if (empty($values)) return null;
        
        $head = new LLNode(array_shift($values));
        $current = $head;
        
        foreach ($values as $value) {
            $current->next = new LLNode($value);
            $current = $current->next;
        }
        
        return $head;
    }
    
    public function testFindIntersection_IntersectAtMiddle() {
        $finder = new FindIntersectionPointYLLOptimal();
        
        $common = new LLNode(8);
        $common->next = new LLNode(4);
        $common->next->next = new LLNode(5);
        
        $listA = new LLNode(4);
        $listA->next = new LLNode(1);
        $listA->next->next = $common;
        
        $listB = new LLNode(5);
        $listB->next = new LLNode(6);
        $listB->next->next = new LLNode(1);
        $listB->next->next->next = $common;
        
        $this->assertSame($common, $finder->findIntersection($listA, $listB));
    }

    public function testFindIntersection_NoIntersection() {
        $finder = new FindIntersectionPointYLLOptimal();
        
        $listA = $this->createLinkedList([2, 6, 4]);
        $listB = $this->createLinkedList([1, 5]);
        
        $this->assertNull($finder->findIntersection($listA, $listB));
    }

    public function testFindIntersection_IntersectAtHead() {
        $finder = new FindIntersectionPointYLLOptimal();
        
        $common = new LLNode(1);
        $common->next = new LLNode(9);
        $common->next->next = new LLNode(1);
        
        $listA = $common;
        $listB = $common;
        
        $this->assertSame($common, $finder->findIntersection($listA, $listB));
    }
    
    public function testFindIntersection_SingleElementNoIntersection() {
        $finder = new FindIntersectionPointYLLOptimal();
        
        $listA = new LLNode(1);
        $listB = new LLNode(2);
        
        $this->assertNull($finder->findIntersection($listA, $listB));
    }
}
