<?php

namespace App\hashtable;

class Set extends HashFunction{

    public function put($key,$value){

        $index = $this->hash($key);

        $this->table[$index] = $value;
    }
}