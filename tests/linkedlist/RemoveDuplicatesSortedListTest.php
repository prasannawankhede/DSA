<?php

namespace Tests\LinkedList;

use PHPUnit\Framework\TestCase;
use App\LinkedList\RemoveDuplicatesSortedList;
use App\LinkedList\LLNode;

class RemoveDuplicatesSortedListTest extends TestCase {
    private function buildList(array $values) {
        $head = new LLNode(array_shift($values));
        $current = $head;
        foreach ($values as $value) {
            $current->next = new LLNode($value);
            $current = $current->next;
        }
        return $head;
    }

    private function listToArray($node): array {
        $arr = [];
        while ($node !== null) {
            $arr[] = $node->value;
            $node = $node->next;
        }
        return $arr;
    }

    public function testDeleteDuplicates() {
        $list = $this->buildList([1,1,2,3,3]);
        $remover = new RemoveDuplicatesSortedList();
        $result = $remover->deleteDuplicates($list);

        $this->assertEquals([1,2,3], $this->listToArray($result));
    }
}