<?php

namespace App;

class QueueObject
{
    private $items;
    private $front;
    private $rear;

    /**
     * Constructor to initialize the queue.
     */
    public function __construct()
    {
        $this->items = [];
        $this->front = 0;
        $this->rear = 0;
    }

    /**
     * Add an element to the rear of the queue.
     *
     * @param mixed $element The element to enqueue.
     */
    public function enqueue($element)
    {
        $this->items[$this->rear] = $element;
        $this->rear++;
    }

    /**
     * Remove and return the front element of the queue.
     *
     * @return mixed The front element.
     */
    public function dequeue()
    {
        if ($this->isEmpty()) {
            throw new \UnderflowException("Queue is empty.");
        }

        $item = $this->items[$this->front];
        unset($this->items[$this->front]);
        $this->front++;

        return $item;
    }

    /**
     * Get the front element without removing it.
     *
     * @return mixed The front element.
     */
    public function peek()
    {
        if ($this->isEmpty()) {
            throw new \UnderflowException("Queue is empty.");
        }

        return $this->items[$this->front];
    }

    /**
     * Get the size of the queue.
     *
     * @return int The size of the queue.
     */
    public function size()
    {
        return $this->rear - $this->front;
    }

    /**
     * Check if the queue is empty.
     *
     * @return bool True if the queue is empty, otherwise false.
     */
    public function isEmpty()
    {
        return $this->size() === 0;
    }

    /**
     * Print the elements of the queue.
     */
    public function print()
    {
        print_r(array_slice($this->items, $this->front, $this->size()));
    }
}
