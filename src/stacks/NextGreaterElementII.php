<?php
namespace App\Stacks;

class NextGreaterElementII
{
    public function find($arr)
    {
        $n     = count($arr);
        $nge   = array_fill(0, $n, -1);
        $stack = [];

        for ($i = 2 * $n - 1; $i >= 0; $i--) {

            while (! empty($stack) && end($stack) <= $arr[$i % $n]) {
                array_pop($stack);
            }

            if ($i < $n) {
                $nge[$i] = empty($stack) ? -1 : end($stack);
            }

            array_push($stack, $arr[$i % $n]); // Push element, NOT index
        }
        return $nge;
    }
}
