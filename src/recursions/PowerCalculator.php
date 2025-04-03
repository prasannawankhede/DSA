<?php
namespace App\Recursions;

class PowerCalculator
{
    public function myPow(float $x, int $n): float
    {
        // Handle 0^0 case (undefined mathematically but commonly returns 1)
        if ($x == 0 && $n == 0) {
            return 1;
        }

        // Handle zero base cases
        if ($x == 0) {
            if ($n < 0) {
                return INF; // 0^-n = infinity
            }
            return 0; // 0^n = 0 where n > 0
        }

        // Handle negative exponents
        if ($n < 0) {
            return 1 / $this->myPow($x, -$n);
        }

        // Base cases
        if ($n == 0) {
            return 1; // x^0 = 1 for any x != 0
        }
        if ($n == 1) {
            return $x;
        }

        // Recursive case using divide and conquer
        $half = $this->myPow($x, intdiv($n, 2));

        if ($n % 2 === 0) {
            return $half * $half;
        } else {
            return $x * $half * $half;
        }

    }
}
