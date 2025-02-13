<?php
namespace App\linkedlist;

class ListNode {
    public $value;
    public $next;

    public function __construct($value) {
        $this->value = $value;
        $this->next  = null;
    }
}

class LinkedListWithTail {
    public $head;
    public $tail;
    public $size;

    public function __construct() {
        $this->head = null;
        $this->tail = null;
        $this->size = 0;
    }

    public function isEmpty(): bool {
        return $this->size === 0;
    }

    /**
     * Prepends a new node with the given value.
     * If the list is empty, both head and tail are set to the new node.
     * Otherwise, the new node becomes the new head.
     */
    public function prepend($value): void {
        $node = new ListNode($value);
        if ($this->isEmpty()) {
            $this->head = $node;
            $this->tail = $node;
        } else {
            $node->next = $this->head;
            $this->head = $node;
        }
        $this->size++;
    }

    /**
     * Converts the linked list to an array.
     */
    public function toArray(): array {
        $elements = [];
        $current  = $this->head;
        while ($current !== null) {
            $elements[] = $current->value;
            $current    = $current->next;
        }
        return $elements;
    }
}
