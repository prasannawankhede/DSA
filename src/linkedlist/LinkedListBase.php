<?php
namespace App\LinkedList;

class LinkedListBase 
{
    public ?LLNode $head = null;
    public int $size = 0;

    public function isEmpty(): bool
    {
        return $this->head === null;
    }

    public function addNode($value)
    {
        $node = new LLNode($value);

        if ($this->head === null) {
            $this->head = $node;
        } else {
            $current = $this->head;
            while ($current->next !== null) {
                $current = $current->next;
            }
            $current->next = $node;
        }
        $this->size++;
    }
}
