<?php
namespace App\LinkedList;

class MiddleoftheLinkedList
{

    public function fimdMiddle($head)
    {

        $slow = $head;
        $fast = $head;

        while ($fast && $fast->next) {
            $slow = $slow->next;
            $fast = $fast->next->next;
        }
        return $slow;
    }
}
