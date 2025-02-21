<?php

namespace App\LinkedList;

class SearchLL extends LinkedlistBase{

    public function search($value){
        if($this->isEmpty()){
            return -1;
        }

        $current = $this->head;
        $index = 0;

        while($current){
            if($current->value == $value){
                return $index;
            }
            $index++;
            $current = $current->next;
        }
        return -1;
    }
}