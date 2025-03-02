<?php
namespace App\LinkedList;

class AddNodeAfterHeadDll
{

    public function insertAfterHead(?DLLNode $head, int $value): ?DLLNode
    {

        if ($head === null) {
            return null;
        }

        $newNode = new DLLNode($value); 

        $current = $head;

        if ($current->next === null) {
            $current->next = $newNode;
            $newNode->prev = $current;
        } else {
            $front         = $current->next;
            $current->next = $newNode;
            $newNode->prev = $current;
            $newNode->next = $front;
            $front->prev   = $newNode;
        }

        return $head;

    }
}
