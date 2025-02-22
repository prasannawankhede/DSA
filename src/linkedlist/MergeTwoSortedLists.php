<?php
namespace App\LinkedList;

class MergeTwoSortedLists
{
    /**
     * Merges two sorted linked lists and returns the head of the merged list.
     *
     * @param LLNode|null $first Head of the first sorted linked list.
     * @param LLNode|null $second Head of the second sorted linked list.
     * @return LLNode|null The head of the merged sorted list.
     */
    public function merge($first, $second)
    {
        $dummy   = new LLNode(0);
        $current = $dummy;

        while ($first !== null && $second !== null) {
            if ($first->value <= $second->value) {
                $current->next = $first;
                $first         = $first->next;
            } else {
                $current->next = $second;
                $second        = $second->next;
            }
            $current = $current->next;

        }

        if ($first !== null) {
            $current->next = $first;
        }
        if ($second !== null) {
            $current->next = $second;
        }

        return $dummy->next;
    }
}
