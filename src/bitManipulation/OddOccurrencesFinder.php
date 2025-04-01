<?php
namespace App\BitManipulation;

class OddOccurrencesFinder
{
    public function findOddOccurrencesTwoElements(array $arr): array
    {
        $xor = 0;
        
        // Step 1: XOR all elements
        foreach ($arr as $num) {
            $xor ^= $num;
        }

        // If xor is 0, all numbers appear even times
        if ($xor == 0) {
            return [];
        }

        // Step 2: Find rightmost set bit
        $rightmostSetBit = $xor & -$xor;

        $num1 = 0;
        $num2 = 0;

        // Step 3: Partition and XOR
        foreach ($arr as $num) {
            if ($num & $rightmostSetBit) {
                $num1 ^= $num;
            } else {
                $num2 ^= $num;
            }
        }

        return [$num1, $num2];
    }
}