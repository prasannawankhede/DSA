<?php

namespace App\LinkedList;

class RemoveDuplicatesFromDLL
{
    public function filter($head)
    {
        if ($head === null || $head->next === null) {
            return $head;
        }

        $current = $head;

        while ($current !== null && $current->next !== null) {
            $nextNode = $current->next;

            while ($nextNode !== null && $current->value == $nextNode->value) {
                $nextNode = $nextNode->next;
            }

            $current->next = $nextNode;

            if ($nextNode !== null) {
                $nextNode->prev = $current;
            }

            $current = $current->next;
        }

        return $head;
    }
}
