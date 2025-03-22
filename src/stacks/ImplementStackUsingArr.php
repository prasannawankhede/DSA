<?php
namespace App\Stacks;

class ImplementStackUsingArr
{
    private $stack;
    private $top;
    private $size;

    public function __construct($size)
    {
        $this->stack = [];
        $this->size  = $size;
        $this->top   = -1;
    }

    public function push(int $x)
    {
        if ($this->top < $this->size - 1) {
            $this->stack[++$this->top] = $x;
        }
    }

    public function pop()
    {
        return $this->top >= 0 ? $this->stack[$this->top--] : -1;
    }

    public function top()
    {
        return $this->top >= 0 ? $this->stack[$this->top] : -1;
    }

    public function size(){
        return $this->top + 1;
    }

}
