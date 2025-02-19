<?php

namespace App\LinkedList;

class RemoveDuplicatesSortedList {
    public function deleteDuplicates($head) {
        
        $current = $head;

        while($current !== null && $current->next !== null){

            if($current->value === $current->next->value){
                $current->next = $current->next->next;
            }else{
                $current = $current->next;
            }
        }
        return $current;
    }
}