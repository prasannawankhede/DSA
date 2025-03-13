<?php
namespace App\LinkedList;

class DeleteAllOccurrenceskeyInDLL
{
    public function remove($head, $k)
    {
        if ($head === null) return null;

        $temp = $head;

        while ($temp !== null) {
            $nextNode = $temp->next;

            if ($temp->value === $k) {
                if ($temp === $head) {
                    $head = $head->next;
                    if ($head !== null) {
                        $head->prev = null;
                    }
                } else {
                    $temp->prev->next = $temp->next;
                    if ($temp->next !== null) {
                        $temp->next->prev = $temp->prev;
                    }
                }
            }

            $temp = $nextNode;
        }
        return $head;
    }
}
