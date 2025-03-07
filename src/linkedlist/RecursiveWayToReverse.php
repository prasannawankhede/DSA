<?php

namespace App\LinkedList;

class RecursiveWayToReverse{

    public $value;
    public $next;

    public function __construct($value){
        $this->value = $value;
        $this->next = $next;
    }

    public function reverseLinkedList($head){

        if($head === null || $head->next === null){
            return $head;
        }

        $newHead = $this->reverseLinkedList($head->next);
        $front = $head->next;
        $front->next = $head;
        $head->next = null;

        return $newHead;
    }
}