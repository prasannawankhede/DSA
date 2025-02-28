<?php
namespace App\LinkedList;

class AddNodeBeforeHeadDll
{

    public function insertAtFront(?DLLNode $head, int $value): ?DLLNode
    {

        $newNode = new DllNode($value);

        if ($head === null) {
            return $newNode;
        }

        $newNode->next = $head;
        $head->prev    = $newNode;

        return $newNode;

    }
}
