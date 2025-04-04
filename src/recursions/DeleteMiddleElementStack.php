<?php
namespace App\Recursions;

class DeleteMiddleElementStack
{//it has an memory exhaustion issue but it works on leetcode
    public function solve(&$stack)
    {
        $n = count($stack);
        if ($n === 0) {
            return;
        }

        $middleIndex = floor($n / 2);
        $this->deleteMiddle($stack, $middleIndex);
    }

    private function deleteMiddle(&$stack, $index)
    {
        if ($index === 1) {
            array_pop($stack);
            return;
        }

        $temp = array_pop($stack);
        $this->deleteMiddle($stack, $index - 1);
        array_push($stack, $temp);
    }
}
