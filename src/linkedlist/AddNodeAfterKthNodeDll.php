<?php
namespace App\LinkedList;

class AddNodeAfterKthNodeDll
{
    public function insertAfterK(?DLLNode $head, int $k, int $value): ?DLLNode
    {
        if ($head === null || $k < 0) {
            return null;
        }

        $newNode = new DLLNode($value);
        $current = $head;

        for ($i = 0; $i < $k; $i++) {
            if ($current->next === null) {
                return null; // K exceeds the list length
            }
            $current = $current->next;
        }

        $front = $current->next;
        $current->next = $newNode;
        $newNode->prev = $current;
        $newNode->next = $front;

        if ($front !== null) {
            $front->prev = $newNode;
        }

        return $head;
    }
}
