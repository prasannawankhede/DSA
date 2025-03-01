<?php

namespace App\LinkedList;

class AddNodeAfterGivenNodeDll
{
    public function insert(?DLLNode $node, int $value): ?DLLNode
    {
        if ($node === null) {
            return null;
        }

        $newNode = new DLLNode($value);
        $front = $node->next;

        $node->next = $newNode;
        $newNode->prev = $node;
        $newNode->next = $front;

        if ($front !== null) {
            $front->prev = $newNode;
        }

        return $node;
    }
}
