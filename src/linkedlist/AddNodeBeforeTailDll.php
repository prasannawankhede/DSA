<?php

namespace App\LinkedList;

class AddNodeBeforeTailDll
{
    public function insertBeforeTail(?DLLNode $head, int $value): ?DLLNode
    {
        $newNode = new DLLNode($value);

        if ($head === null) {
            return null;
        }

        $current = $head;

        while ($current->next !== null) {
            $current = $current->next;
        }

        $tail = $current;
        $prev = $current->prev;

        if ($prev !== null) {
            $prev->next = $newNode;
            $newNode->prev = $prev;
        } else {
            // If only one node, directly insert before tail
            $head->next = $newNode;
            $newNode->prev = $head;
        }

        $newNode->next = $tail;
        $tail->prev = $newNode;

        return $head;
    }
}
