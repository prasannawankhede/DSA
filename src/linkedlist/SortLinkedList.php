<?php
namespace App\LinkedList;

use App\LinkedList\LLNode;

class SortLinkedList
{
    public function findMiddle($head)
    {
        $slow = $head;
        $fast = $head->next;

        while ($fast !== null && $fast->next !== null) {
            $slow = $slow->next;
            $fast = $fast->next->next;
        }
        return $slow;
    }

    public function mergeTwoList($first, $second)
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

    public function sort($head)
    {
        if ($head === null || $head->next === null) {
            return $head;
        }

        $mid       = $this->findMiddle($head);
        $left      = $head;
        $right     = $mid->next;
        $mid->next = null;

        $left  = $this->sort($left);
        $right = $this->sort($right);
        return $this->mergeTwoList($left, $right);
    }
}
