<?php
namespace App\LinkedList;

class LinkedListBase
{
    public $head;
    public $size;

    public function __construct()
    {
        $this->head = null;
        $this->size = 0;
    }

    public function isEmpty()
    {
        return $this->size === 0;
    }

    public function getSize()
    {
        return $this->size;
    }
}
