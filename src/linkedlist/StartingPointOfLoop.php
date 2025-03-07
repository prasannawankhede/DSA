<?php

namespace App\LinkedList;

class StartingPointOfLoop{

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
                
                $slow = $head;
                while($slow !== $fast){
                    $slow = $slow->next;
                    $fast = $fast->next;
                }
                return $slow;
            }
        }
        return false;
    }
}