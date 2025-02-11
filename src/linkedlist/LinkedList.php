<?php
namespace App\linkedlist;

class ListNode
{

    public $value;
    public $next;

    // Correct constructor name
    public function __construct($value)
    {
        $this->value = $value;
        $this->next  = null;
    }
}

class LinkedList
{

    private $head;
    private $size;

    // Correct constructor name and proper initialization of head
    public function __construct()
    {
        $this->head = null;
        $this->size = 0;
    }

    public function isEmpty()
    {
        return $this->size === 0;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function prepend($value)
    {
        // Use proper class name case
        $node = new ListNode($value);

        if ($this->isEmpty()) {
            $this->head = $node;
        } else {
            $node->next = $this->head;
            $this->head = $node;
        }

        $this->size++; // Don't forget to increment the size!
    }

    public function append($value)
    {

        $node = new ListNode($value);

        $current = $this->head;

        if ($this->isEmpty()) {
            $this->head = $node;
        } else {
            while ($current->next !== null) {
                $current = $current->next;
            }
            $current->next = $node;
        }

        $this->size++;

    }

    public function insert($value, $index)
    {

        if ($index < 0 || $index > $this->size) {
            return;
        } else if ($index === 0) {
            $this->prepend($value);
        } else {
            $node = new ListNode($value);
            $prev = $this->head;

            for ($i = 0; $i < $index - 1; $i++) {
                $prev = $prev->next;
            }
            $node->next = $prev->next;
            $prev->next = $node;
            $this->size++;

        }
    }

    public function removeFrom($index)
    {

        if ($index < 0 || $index >= $this->size) {
            return null;
        }

        $removeNode = null;

        if ($index === 0) {

            $removeNode = $this->head;
            $this->head = $this->head->next;

        } else {

            $prev = $this->head;

            for ($i = 0; $i < $index - 1; $i++) {

                $prev = $prev->next;
            }

            $removeNode = $prev->next;
            $prev->next = $removeNode->next;
            $this->size--;
            return $removeNode->value;
        }
        return null;

    }

    public function removeValue($value)
{
    // If the list is empty, return null.
    if ($this->isEmpty()) {
        return null;
    }

    // If the head contains the target value, remove the head.
    if ($this->head->value === $value) {
        $this->head = $this->head->next;
        $this->size--;
        return $value;
    } else {
        // Initialize a pointer to traverse the list.
        $prev = $this->head;
        // Traverse until we find a node whose next node contains the target value.
        while ($prev->next !== null && $prev->next->value !== $value) {
            $prev = $prev->next;
        }
        // If we found the target node in the list...
        if ($prev->next !== null) {
            $removedNode = $prev->next;
            // Bypass the removed node.
            $prev->next = $removedNode->next;
            $this->size--;
            return $value;
        }
    }
    // If the value was not found, return null.
    return null;
}

    public function search($value){
        if($this->isEmpty()){
            return -1;
        }

        $current = $this->head;
        $index = 0;

        while($current){
            if($current->value === $value){
                return $index;
            }
            $current = $current->next;
            $index++;
        }
        return -1;
    }


    public function toArray(): array
    {
        $elements = [];
        $current  = $this->head;
        while ($current !== null) {
            $elements[] = $current->value;
            $current    = $current->next;
        }
        return $elements;
    }

    public function printList()
    {

        if ($this->isEmpty()) {
            echo "List is empty";

        } else {

            $current = $this->head;
            $list    = "";

            while ($current) {

                $list    = $list . $current->value . "->";
                $current = $current->next;

            }

            echo $list;
        }
    }
}
