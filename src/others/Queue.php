<?php

namespace App;

class Queue
{
    private $queue;

    public function __construct()
    {
        $this->queue = [];
    }

    /**
     * Adds an item to the end of the queue.
     *
     * @param mixed $item The item to add
     */
    public function enqueue($item): void
    {
        array_push($this->queue, $item);
    }

    /**
     * Removes and returns the item at the front of the queue.
     *
     * @return mixed The item at the front of the queue
     * @throws \RuntimeException if the queue is empty
     */
    public function dequeue()
    {
        if ($this->isEmpty()) {
            throw new \RuntimeException("Queue is empty");
        }
        return array_shift($this->queue);
    }

    /**
     * Checks if the queue is empty.
     *
     * @return bool True if the queue is empty, false otherwise
     */
    public function isEmpty(): bool
    {
        return empty($this->queue);
    }

    /**
     * Returns the number of items in the queue.
     *
     * @return int The size of the queue
     */
    public function size(): int
    {
        return count($this->queue);
    }

    /**
     * Returns the item at the front of the queue without removing it.
     *
     * @return mixed The item at the front of the queue
     * @throws \RuntimeException if the queue is empty
     */
    public function peek()
    {
        if ($this->isEmpty()) {
            throw new \RuntimeException("Queue is empty");
        }
        return $this->queue[0];
    }

    /**
     * Prints the contents of the queue.
     *
     * @return string A string representation of the queue
     */
    public function print(): string
    {
        if ($this->isEmpty()) {
            return "Queue is empty.";
        }

        $output = "Queue contents:\n";
        foreach ($this->queue as $index => $item) {
            $output .= "[$index] => $item\n";
        }
        return $output;
    }
}