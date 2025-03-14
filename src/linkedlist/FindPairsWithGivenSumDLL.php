<?php

namespace App\LinkedList;

class DLLNode
{
    public int $value;
    public ?DLLNode $next = null;
    public ?DLLNode $prev = null;

    public function __construct(int $value)
    {
        $this->value = $value;
    }
}

class FindPairsWithGivenSumDLL
{
    public function findPairs(?DLLNode $head, int $target): array
    {
        $result = [];
        if (!$head || !$head->next) {
            return $result; // If list is empty or has only one node, return empty
        }

        $left = $head;
        $right = $head;

        // Move right pointer to the last node
        while ($right->next !== null) {
            $right = $right->next;
        }

        // Two-pointer approach
        while ($left !== null && $right !== null && $left !== $right && $left->prev !== $right) {
            $currentSum = $left->value + $right->value;

            if ($currentSum == $target) {
                $result[] = [$left->value, $right->value];
                $left = $left->next;
                $right = $right->prev;
            } elseif ($currentSum < $target) {
                $left = $left->next;
            } else {
                $right = $right->prev;
            }
        }

        return $result;
    }
}
