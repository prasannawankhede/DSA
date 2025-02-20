<?php
namespace App\LinkedList;

use App\LinkedList\LLNode;

class AppendLinkedList extends LinkedListBase
{

    public function append($value)
    {

        $node = new LLNode($value);

        if ($this->isEmpty()) {
            $this->head = $node;
        } else {
            $prev = $this->head;

            while ($prev->next !== null) {
                $prev = $prev->next;
            }
            $prev->next = $node;

        }
        $this->size++;
        return $value;
    }

}
