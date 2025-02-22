<?php
namespace App\LinkedList;

class RemoveDuplicatesSortedList
{
    public function deleteDuplicates($head)
    {

        if ($head === null) {
            return null; // Handle empty list case
        }

        $current = $head;

        while ($current !== null && $current->next !== null) {
            if ($current->value === $current->next->value) {
                $current->next = $current->next->next;
            } else {
                $current = $current->next;
            }
        }

        return $head;
    }
}
