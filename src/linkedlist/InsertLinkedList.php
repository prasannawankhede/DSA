<?php
namespace App\LinkedList;

use App\LinkedList\PrePendLinkedList;
use App\LinkedList\LLNode;

class InsertLinkedList extends PrePendLinkedList
{
    public function insert($index, $value)
    {
        if ($index < 0 || $index > $this->size) {
            return;
        }

        if ($index === 0) {
            $this->prePend($value);
            return;
        }

        $node = new LLNode($value);
        $prev = $this->head;

        for ($i = 0; $i < $index - 1; $i++) {
            $prev = $prev->next;
        }

        $node->next = $prev->next;
        $prev->next = $node;
        $this->size++;
    }
}
