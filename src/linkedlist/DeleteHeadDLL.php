<?php
namespace App\LinkedList;

use App\LinkedList\DLLNode;

class DeleteHeadDLL
{

    public function deleteHead(?DLLNode $head): ?DLLNode
    {

        if ($head === null) {
            return null;
        }

        if ($head->next === null) {
            return null;
        }

        $newHead       = $head->next;
        $newHead->prev = null;
        $head->next    = null;

        return $newHead;
    }
}
