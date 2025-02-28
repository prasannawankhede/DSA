<?php
namespace App\LinkedList;

class DeleteNodeDll
{
    public function deleteNode(?DLLNode $node): void
    {
        if ($node === null) {
            return;
        }

        $prev = $node->prev;
        $next = $node->next;

        // If the node is not the last node
        if ($next !== null) {
            $next->prev = $prev;
        }

        // If the node is not the first node
        if ($prev !== null) {
            $prev->next = $next;
        }

        // Disconnect the node from the list
        $node->next = null;
        $node->prev = null;
    }
}