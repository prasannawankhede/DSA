<?php
namespace App\Stacks;

class MinStack
{
    private $stack;
    private int $min;

    public function __construct()
    {
        $this->stack = [];
        $this->min   = PHP_INT_MAX;
    }

    public function push(int $value)
    {
        if (empty($this->stack)) {
            $this->min = $value;
            array_push($this->stack, $value);
        } else {
            if ($value < $this->min) {
                array_push($this->stack, 2 * $value - $this->min);
                $this->min = $value;
            } else {
                array_push($this->stack, $value);
            }
        }
    }

    public function pop()
    {
        if (empty($this->stack)) {
            return;
        }

        $top = array_pop($this->stack);
        if ($top < $this->min) {
            $this->min = 2 * $this->min - $top;
        }

        if (empty($this->stack)) {
            $this->min = PHP_INT_MAX;
        }

    }

    public function top()
    {
        if (empty($this->stack)) {
            return -1;
        }

        $top = end($this->stack);
        return ($top < $this->min) ? $this->min : $top;
    }

    public function getMin()
    {
        return $this->min;
    }

}
