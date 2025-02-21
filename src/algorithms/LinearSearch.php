<?php
namespace App\Algorithms;

class LinearSearch
{

    public function search(array $arr, $target)
    {
        if(count($arr) < 1){
            return -1;
        }

        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] == $target) {
                return $i;
            }
        }

        return -1;
    }
}
