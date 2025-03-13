<?php
namespace App\LinkedList;

class DeleteAllOccurrenceskeyInDLL
{
    public function remove($head, $k)
    {
        if ($head === null) return null;

        $temp = $head;

        while ($temp !== null) {
            $nextNode = $temp->next; // Store next before possible deletion

            if ($temp->value === $k) {
                if ($temp === $head) {
                    $head = $head->next;
                    if ($head !== null) {
                        $head->prev = null; // Properly update head's prev
                    }
                } else {
                    $temp->prev->next = $temp->next;
                    if ($temp->next !== null) {
                        $temp->next->prev = $temp->prev;
                    }
                }
            }

            $temp = $nextNode; // Move to the stored next node
        }
        return $head;
    }
}
