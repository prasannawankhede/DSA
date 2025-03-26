<?php
namespace App\Stacks;

class NumberOfGreaterElementsRight
{
    public function find($arr, $queries)
    {
        $n = count($arr);
        $stack = [];
        $greater_counts = array_fill(0, $n, 0);

        for ($i = $n - 1; $i >= 0; $i--) {
            // Maintain a strictly decreasing stack
            while (!empty($stack) && $arr[$stack[count($stack) - 1]] <= $arr[$i]) {
                array_pop($stack);
            }

            // Store the count of strictly greater elements
            $greater_counts[$i] = count($stack);

            // Push the current index into the stack (instead of values)
            array_push($stack, $i);
        }

        // Extract results for queries
        $result = [];
        foreach ($queries as $q) {
            $result[] = $greater_counts[$q];
        }

        return $result;
    }
}

