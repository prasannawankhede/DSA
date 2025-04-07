<?php
namespace App\Recursions;

class GenerateAllBalancedParentheses
{
    public function solve(int $n): array
    {
        $result = [];
        $open   = $n;
        $close  = $n;
        $op     = '';

        $this->generate($open, $close, $op, $result);
        return $result;
    }

    public function generate(int $open, int $close, string $op, array &$result): void
    {
        if ($open === 0 && $close === 0) {
            $result[] = $op;
            return;
        }

        if ($open > 0) {
            $op1 = $op . "(";
            $this->generate($open - 1, $close, $op1, $result);
        }

        if ($close > $open) {
            $op2 = $op . ")";
            $this->generate($open, $close - 1, $op2, $result);
        }
    }
}
