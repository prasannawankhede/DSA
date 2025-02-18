<?php
namespace App\linkedlist;

class LinkedListQueue {
    private $list;

    public function __construct() {
        // Use the LinkedListWithTail class as the underlying storage.
        $this->list = new LinkedListWithTail();
    }

    /**
     * Adds a value to the end of the queue.
     */
    public function enqueue($value): void {
        // For a queue, adding at the end is like appending.
        $this->list->appendWithTail($value);
    }

    /**
     * Removes and returns the value at the front of the queue.
     * Returns null if the queue is empty.
     */
    public function dequeue() {
        return $this->list->removeFromFront();
    }

    /**
     * Returns the value at the front of the queue without removing it.
     */
    public function peek() {
        return $this->list->isEmpty() ? null : $this->list->head->value;
    }

    /**
     * Returns true if the queue is empty.
     */
    public function isEmpty(): bool {
        return $this->list->isEmpty();
    }

    /**
     * Returns the number of elements in the queue.
     */
    public function getSize(): int {
        return $this->list->size;
    }

    /**
     * Prints the queue.
     */
    public function printQueue() {
        $this->list->printList();
    }
}
