<?php
namespace App\BitManipulation;

class DivideTwoIntegersWithoutMD
{
    public function divide(int $dividend, int $divisor) // <-- Change method name
    {
        if ($divisor == 0) {
            return PHP_INT_MAX; // Handling division by zero
        }

        $sign = ($dividend < 0) ^ ($divisor < 0) ? -1 : 1;

        $dividend = abs($dividend);
        $divisor  = abs($divisor);

        $quotient = 0;

        while ($dividend >= $divisor) {
            $dividend -= $divisor;
            $quotient++;
        }

        return $sign * $quotient;
    }
}
