<?php

namespace App\LinkedList;

class DLLNode
{
    public $value;
    public ?DLLNode $next;
    public ?DLLNode $prev;

    public function __construct($value)
    {
        $this->value = $value;
        $this->next = null;
        $this->prev = null;
    }
}
