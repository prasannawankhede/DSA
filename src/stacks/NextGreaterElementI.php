<?php
namespace App\Stacks;

class NextGreaterElementI
{
    public function findNge(array $arr)
    {
        $n = count($arr);
        $nge = array_fill(0, $n, -1); // Initialize result with -1
        $stack = []; // Stack to track indices

        // Iterate through the array in reverse order
        for ($i = $n - 1; $i >= 0; $i--) {
            // Pop elements from stack while they are smaller than current element
            while (!empty($stack) && $arr[$stack[count($stack) - 1]] <= $arr[$i]) {
                array_pop($stack);
            }

            // If stack is not empty, top of stack is the next greater element
            if (!empty($stack)) {
                $nge[$i] = $arr[$stack[count($stack) - 1]];
            }

            // Push current index to stack
            array_push($stack, $i);
        }

        return $nge;
    }
}