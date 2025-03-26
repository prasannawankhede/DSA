<?php
namespace App\Stacks;

class NearestSmallerElement
{

    public function find(array $arr)
    {
        $n      = count($arr);
        $stack  = [];
        $result = array_fill(0, $n, -1);

        for ($i = 0; $i < $n; $i++) {

            while (! empty($stack) && end($stack) >= $arr[$i]) {
                array_pop($stack);
            }

            if (! empty($stack)) {
                $result[$i] = end($stack);
            }
            array_push($stack, $arr[$i]);

        }
        return $result;
    }
}
