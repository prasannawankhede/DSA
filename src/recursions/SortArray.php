<?php
namespace App\Recursions;

class SortArray
{
    public function sort(array &$arr): void
    {
        if (count($arr) <= 1) {
            return;
        }

        $temp = array_pop($arr);
        $this->sort($arr);
        $this->insert($arr, $temp);
    }

    public function insert(&$arr, $temp)
    {
        if (count($arr) === 0 || $arr[count($arr) - 1] <= $temp) {
            array_push($arr, $temp);
            return;
        }

        $value = array_pop($arr);
        $this->insert($arr, $temp);
        array_push($arr, $value);
        

    }
}
