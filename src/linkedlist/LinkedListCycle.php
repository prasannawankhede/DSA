<?php
namespace App\LinkedList;

class LinkedListCycle
{

    public function hasCycle($head): bool
    {
        $slow = $head;
        $fast = $head;

        while ($fast !== null && $fast->next !== null) {
            $slow = $slow->next;
            $fast = $fast->next->next;

            if ($slow == $fast) {
                return true;
            }
        }

        return false;
    }
}
