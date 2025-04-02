<?php
namespace App\BitManipulation;

class PrimeFactors
{
    public function getPrimeFactors(int $num): array
    {
        $factors = [];

        while ($num % 2 == 0) {
            $factors[] = 2;
            $num /= 2;
        }

        for ($i = 3; $i * $i <= $num; $i += 2) {
            while ($num % $i == 0) {
                $factors[] = $i;
                $num /= $i;
            }
        }

        if ($num > 2) {
            $factors[] = $num;
        }

        return $factors;
    }
}
