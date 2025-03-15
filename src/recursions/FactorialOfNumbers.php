<?php
namespace App\Recursions;

class FactorialOfNumbers
{
    public function factorial($n)
    {
        if ($n < 0) {
            throw new \InvalidArgumentException("Factorial is not defined for negative numbers.");
        }

        if ($n === 0) {
            return 1;
        }

        return $n * $this->factorial($n - 1);
    }
}
