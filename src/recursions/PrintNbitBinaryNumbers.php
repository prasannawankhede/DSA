<?php
namespace App\Recursions;

class PrintNbitBinaryNumbers
{
    public function solve(int $n): array
    {
        $result = [];
        $this->generate(0, 0, "", $n, $result);
        return $result;
    }

    private function generate(int $one, int $zero, string $op, int $n, array &$result): void
    {
        if ($n === 0) {
            $result[] = $op;
            return;
        }

        // Always can add 1
        $this->generate($one + 1, $zero, $op . "1", $n - 1, $result);

        // Only add 0 if ones > zeros
        if ($one > $zero) {
            $this->generate($one, $zero + 1, $op . "0", $n - 1, $result);
        }
    }
}
