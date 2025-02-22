<?php
namespace App\Algorithms;

class BinarySearchAlgorithm
{

    public function search($arr, $target)
    {

        if (empty($arr)) {
            return -1;
        }

        $left  = 0;
        $right = count($arr) - 1;

        while ($left <= $right) {
            $mid = floor(($left + $right) / 2);

            if($target === $arr[$mid]){
                return $mid;
            }
            if($target < $arr[$mid]){
                $right = $mid - 1;
            }
            else{
                $left = $mid + 1;
            }

        }
        return -1;
    }
}
