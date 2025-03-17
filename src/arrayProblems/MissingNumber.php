<?php

namespace App\ArrayProblems;

class MissingNumber
{
    public function findMissingNumber(array $a, int $N): int
    {
        // Summation of first N numbers:
        $summation = ($N * ($N + 1)) / 2;

        // Summation of all array elements:
        $s2 = array_sum($a);

        return $summation - $s2;
    }
}
