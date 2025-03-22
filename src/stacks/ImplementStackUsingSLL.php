<?php
namespace App\Stacks;

class StackNode
{
    public int $value;
    public ?StackNode $next;

    public function __construct(int $value)
    {
        $this->value = $value;
        $this->next  = null;
    }
}

class ImplementStackUsingSLL
{
    public $top;
    public int $size;

    public function __construct(int $size)
    {
        $this->size = 0;
        $this->top  = null;
    }

    public function push(int $x)
    {

        $newElement       = new StackNode($x);
        $newElement->next = $this->top;
        $this->top        = $newElement;
        $this->size++;
    }

    public function pop(): int
    {
        if ($this->top === null) {
            return -1;
        }

        $topValue  = $this->top->value;
        $this->top = $this->top->next;
        $this->size--;
        return $topValue;
    }

    public function size()
    {
        return $this->size;
    }

    public function empty()
    {
        return $this->top === null;
    }

    public function peek()
    {
        return $this->top !== null ? $this->top->value : -1;
    }

    public function stackToArr()
    {
        $curr = $this->top;
        $ans  = [];
        while ($curr !== null) {
            $ans[] = $curr->value;
            $curr  = $curr->next;
        }
        return $ans;
    }
}
