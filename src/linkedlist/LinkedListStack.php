<?php
namespace App\linkedlist;

class LinkedListStack {
    private $list;

    public function __construct() {
        // Use the LinkedListWithTail class as the underlying data structure.
        $this->list = new LinkedListWithTail();
    }

    /**
     * Pushes a value onto the stack.
     * Uses the prepend method so that the new element becomes the top of the stack.
     */
    public function push($value): void {
        $this->list->prepend($value);
    }

    /**
     * Pops the top value off the stack.
     * Returns null if the stack is empty.
     */
    public function pop() {
        return $this->list->removeFromFront();
    }

    /**
     * Returns the value at the top of the stack without removing it.
     */
    public function peek() {
        return $this->list->isEmpty() ? null : $this->list->head->value;
    }

    /**
     * Returns true if the stack is empty.
     */
    public function isEmpty(): bool {
        return $this->list->isEmpty();
    }

    /**
     * Returns the number of elements in the stack.
     */
    public function getSize(): int {
        return $this->list->size; // Assuming LinkedListWithTail exposes public property "size"
    }

    /**
     * Prints the stack.
     * Here, we call the underlying list's printList() method.
     */
    public function printStack() {
        $this->list->printList();
    }
}
