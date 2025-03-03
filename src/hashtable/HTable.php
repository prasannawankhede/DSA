<?php

namespace app\HashTable;

class HTable{

    public function __construct($size){

        $this->size = $size;
        $this->table = array_fill(0,$size,null);

    }
}