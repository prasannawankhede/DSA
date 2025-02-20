<?php
namespace App\LinkedList;

use App\LinkedList\LLNode;
use App\LinkedList\LinkedListBase;

class PrePendLinkedList extends LinkedListBase
{
    public function prePend($value)
    {
        $node = new LLNode($value);

        if ($this->isEmpty()) {
            $this->head = $node;
        } else {
            $node->next = $this->head;
            $this->head = $node;
        }

        $this->size++;
    }
}
