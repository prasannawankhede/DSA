<?php
namespace App\ArrayProblems;

class SortArrayOfZeroOnetwos
{
    public function swap(&$a,&$b){
        $temp = $a;
        $a = $b;
        $b = $temp;
    }

    public function sortArr(&$arr)
    {

        $low  = 0;
        $mid  = 0;
        $high = count($arr) - 1;

        while ($mid <= $high) {

            if ($arr[$mid] === 0) {
                $this -> swap($arr[$low], $arr[$mid]);
                $low++;
                $mid++;
            } else if ($arr[$mid] === 1) {
                $mid++;
            } else {
                $this->swap($arr[$mid],$arr[$high]);
                $high--;
            }
        }
    }
}
