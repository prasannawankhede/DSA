<?php
namespace App\Recursions;

class SortStack
{
    public function sort(array &$stack): void
    {
        if (count($stack) <= 1) {
            return;
        }

        $temp = array_pop($stack);
        $this->sort($stack);
        $this->insert($stack, $temp);
    }

    private function insert(array &$stack, $temp)
    {
        if (empty($stack) || $stack[count($stack) - 1] <= $temp) {
            array_push($stack, $temp);
            return;
        }

        $value = array_pop($stack);
        $this->insert($stack, $temp);
        array_push($stack, $value);
    }
}
