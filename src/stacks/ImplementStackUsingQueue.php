<?php
namespace App\Stacks;

class ImplementStackUsingQueue
{
    private $queue;

    public function __construct()
    {
        $this->queue = [];
    }

    public function push($x)
    {
        $size = count($this->queue);
        array_push($this->queue, $x);

        for ($i = 0; $i < $size; $i++) {
            array_push($this->queue, array_shift($this->queue));
        }
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            return null;
        }
        return array_shift($this->queue);
    }

    public function top()
    {
        if ($this->isEmpty()) {
            return null;
        }
        return $this->queue[0];
    }

    public function size()
    {
        return count($this->queue);
    }

    public function isEmpty()
    {
        return empty($this->queue);
    }
}
