<?php
namespace App\HashTable;

use App\HashTable\Htable;

class HashFunction extends HTable
{

    public function hash($key)
    {

        $total = 0;

        if (is_string($key)) {

            for ($i = 0; $i < strlen($key); $i++) {
                $total += ord($key[$i]);
            }
            
        } elseif (is_int($key)) {
            $total = $key;
        }

        return $total % $this->size;

    }
}
