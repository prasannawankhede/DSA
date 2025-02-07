<?php

namespace App\linkedlist;

class ListNode {

    /**
     * The value stored in the node.
     *
     * @var mixed
     */
    public $value;

    /**
     * The next node in the linked list.
     *
     * @var ListNode|null
     */
    public $next;

    /**
     * ListNode constructor.
     *
     * @param mixed $value
     */
    public function __construct($value)
    {
        $this->value = $value;
        $this->next = null;
    }
}

class LinkedList {

    /**
     * The head (first node) of the linked list.
     *
     * @var ListNode|null
     */
    private $head;

    /**
     * The size (number of nodes) of the linked list.
     *
     * @var int
     */
    private $size;

    /**
     * LinkedList constructor.
     */
    public function __construct()
    {
        $this->head = null;
        $this->size = 0;
    }

    /**
     * Checks if the linked list is empty.
     *
     * @return bool
     */
    public function isEmpty(): bool
    {
        return $this->size === 0;
    }

    /**
     * Returns the size of the linked list.
     *
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * Prepends a value to the beginning of the linked list.
     *
     * @param mixed $value
     * @return void
     */
    public function prepend($value): void
    {
        $node = new ListNode($value);

        if ($this->isEmpty()) {
            $this->head = $node;
        } else {
            $node->next = $this->head;
            $this->head = $node;
        }

        $this->size++;
    }

    /**
     * Converts the linked list to an array.
     *
     * @return array
     */
    public function toArray(): array
    {
        $elements = [];
        $current = $this->head;
        while ($current !== null) {
            $elements[] = $current->value;
            $current = $current->next;
        }
        return $elements;
    }
}
