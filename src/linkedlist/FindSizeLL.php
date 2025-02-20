<?php
namespace App\LinkedList;

class FindSizeLL
{

    public $head;
    public $size;

    public function __construct()
    {

        $this->head = null;
        $this->size = 0;
    }

    public function getSize($head)
    {
        $count   = 0;
        $current = $head;

        while ($current !== null) {
            $count++;
            $current = $current->next;
        }
        $this->size = $count;
        return $count;
    }

}
