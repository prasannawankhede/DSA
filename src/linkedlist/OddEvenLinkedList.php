<?php

namespace App\LinkedList;

class OddEvenLinkedList {
    public function sort($head) {
        if ($head === null || $head->next === null) {
            return $head;
        }

        $odd = $head;
        $even = $head->next;
        $evenHead = $even;

        while ($even && $even->next) {
            $odd->next = $odd->next->next; 
            $even->next = $even->next->next;

            $odd = $odd->next; 
            $even = $even->next;
        }

        $odd->next = $evenHead;
        return $head;
    }
}
