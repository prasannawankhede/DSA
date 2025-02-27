<?php
namespace App\LinkedList;

class DeleteKthNodeDll
{
    public function removeNode(?DLLNode $head, int $k): ?DLLNode
    {
        if ($head === null) {
            return null;
        }

        $temp = $head;

        for ($i = 1; $i < $k; $i++) {
            if ($temp->next === null) {
                return $head; // If k is out of bounds, return original list
            }
            $temp = $temp->next;
        }

        // Case: Deleting head node
        if ($temp->prev === null) {
            return (new DeleteHeadDLL())->deleteHead($head);
        }

        // Case: Deleting tail node
        if ($temp->next === null) {
            return (new DeleteTailDLL())->deleteTail($head);
        }

        // General Case: Middle node
        $prev = $temp->prev;
        $front = $temp->next;

        if ($prev !== null) {
            $prev->next = $front;
        }

        if ($front !== null) {
            $front->prev = $prev;
        }

        return $head;
    }
}
