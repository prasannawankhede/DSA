<?php

namespace App;

class RecursiveFibonacchi
{
    public function fibonacchi($n)
    {
        if ($n < 0) {
            throw new \InvalidArgumentException("Negative numbers are not allowed.");
        }

        if ($n === 0) {
            return 0; // Base case: Fibonacci of 0 is 0
        }

        if ($n === 1) {
            return 1; // Base case: Fibonacci of 1 is 1
        }

        return $this->fibonacchi($n - 1) + $this->fibonacchi($n - 2); // Recursive case
    }
}
