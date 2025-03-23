<?php
namespace App\Queues;

class QueueNode
{

    public $next;
    public $value;

    public function __construct($value)
    {
        $this->next  = null;
        $this->value = $value;
    }
}

class ImplementQueueUsingSLL
{

    public $start;
    public $end;
    public int $size;

    public function __construct()
    {
        $this->start = null;
        $this->end   = null;
        $this->size  = 0; 
    }

    public function enqueue(int $x)
    {
        

        $newNode = new QueueNode($x);

        if ($this->end === null) {
            $this->start = $newNode;
            $this->end   = $newNode;
        } else {
            $this->end->next = $newNode;
            $this->end       = $newNode;
        }

        $this->size++;
    }

    public function dequeue()
    {

        if ($this->start === null) {
            return -1;
        }

        $removedValue = $this->start->value;
        $this->start  = $this->start->next;

        //if we are deleting last element

        if ($this->start === null) {
            $this->end = null;
        }

        $this->size--;
        return $removedValue;
    }

    public function peek()
    {
        return $this->start !== null ? $this->start->value : -1;
    }

    public function isEmpty()
    {
        return $this->start === null;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function QueueToArr()
    {
        $temp = $this->start;
        $ans  = [];
        while ($temp !== null) {
            $ans[] = $temp->value;
            $temp  = $temp->next;
        }
        return $ans;
    }
}
