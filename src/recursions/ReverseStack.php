<?php
namespace App\Recursions;

class ReverseStack
{
    public function reverse(array &$stack): void
    {
        if (count($stack) <= 1) {
            return;
        }

        $temp = array_pop($stack);
        $this->reverse($stack);
        $this->insertAtBottom($stack, $temp);
    }

    private function insertAtBottom(array &$stack, $temp): void
    {
        if (empty($stack)) {
            array_push($stack, $temp);
            return;
        }

        $top = array_pop($stack);
        $this->insertAtBottom($stack, $temp);
        array_push($stack, $top);
    }
}
