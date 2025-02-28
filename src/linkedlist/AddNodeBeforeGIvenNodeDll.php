<?php

namespace App\LinkedList;


class AddNodeBeforeGIvenNodeDll
{
    public function insertBeforeNode(?DLLNode $head, ?DLLNode $node, int $value): ?DLLNode
    {
        if ($node === null) {
            return null;
        }

        $newNode = new DLLNode($value);

        if ($node->prev === null) {
            $head = (new AddNodeBeforeHeadDll())->insertAtFront($head, $value);
            return $head;
        }

        $prev = $node->prev;
        $prev->next = $newNode;
        $newNode->prev = $prev;
        $newNode->next = $node;
        $node->prev = $newNode;

        return $head;
    }
}
