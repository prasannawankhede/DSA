<?php
namespace App\linkedList;

use App\LinkedList\DLLNode;

class DeleteTailDLL
{
    public function deleteTail(?DLLNode $head): ?DLLNode
    {
        if ($head === null || $head->next === null) {

            return null;
        }

        $current = $head;

        while ($current->next !== null) {

            $current = $current->next;
        }

        $prevNode       = $current->prev;
        $prevNode->next = null;

        $current->prev = null;

        return $head;
    }
}
