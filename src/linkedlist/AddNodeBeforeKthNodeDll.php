<?php

namespace App\LinkedList;

class AddNodeBeforeKthNodeDll
{
    public function insertBeforeK(?DLLNode $head, int $k, int $value): ?DLLNode
    {
        $newNode = new DLLNode($value);

        if ($head === null) {
            return null;
        }

        $current = $head;

        // Traverse k-1 nodes to reach the kth node
        for ($i = 1; $i < $k; $i++) {
            if ($current->next === null) {
                return $head; // If k is out of bounds, return original list
            }
            $current = $current->next;
        }

        // If inserting before the head (k = 1)
        if ($current->prev === null) {
            return (new AddNodeBeforeHeadDll())->insertAtFront($head, $value);
        }

        $prev = $current->prev;

        // Insert the new node between prev and current
        $prev->next = $newNode;
        $newNode->prev = $prev;
        $newNode->next = $current;
        $current->prev = $newNode;

        return $head;
    }
}
