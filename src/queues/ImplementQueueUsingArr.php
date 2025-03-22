<?php
namespace App\Queues; // Ensure this matches your test file

class ImplementQueueUsingArr
{
    private $arr;
    private $start;
    private $end;
    private $currSize;
    private $maxSize;

    public function __construct($maxSize)
    {
        $this->arr = [];
        $this->start = -1;
        $this->end = -1;
        $this->currSize = 0;
        $this->maxSize = $maxSize;
    }

    public function push(int $newElement)
    {
        if ($this->currSize === $this->maxSize) {
            return;
        }
        if ($this->currSize === 0) {
            $this->start = 0;
            $this->end = 0;
        } else {
            $this->end = ($this->end + 1) % $this->maxSize;
        }
        $this->arr[$this->end] = $newElement;
        $this->currSize++;
    }

    public function pop()
    {
        if ($this->currSize === 0) {
            return null;
        }

        $popped = $this->arr[$this->start];
        if ($this->currSize === 1) {
            $this->start = -1;
            $this->end = -1;
        } else {
            $this->start = ($this->start + 1) % $this->maxSize;
        }
        $this->currSize--;
        return $popped;
    }

    public function top()
    {
        return $this->currSize > 0 ? $this->arr[$this->start] : null;
    }

    public function size()
    {
        return $this->currSize;
    }
}
