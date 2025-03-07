<?php

namespace App\LinkedList;

class lengthOfLoopLinkedList{

    public function findLength($slow, $fast)
{
    $count = 1;
    $fast = $fast->next;
    
    while ($slow !== $fast) {
        $fast = $fast->next;
        $count++;
    }
    return $count;
}


    public function find($head){

        if($head === null){
            return false;
        }

        $slow = $head;
        $fast = $head;

        while($fast !== null && $fast->next !== null){

            $slow = $slow->next;
            $fast = $fast->next->next;

            if($slow === $fast){

                return $this->findLength($slow,$fast);
            }
        }
        return false;
    }
}