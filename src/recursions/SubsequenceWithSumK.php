<?php
namespace App\Recursions;

class SubsequenceWithSumK
{
    public function sumK(array $ip, int $k): array
    {
        $result = [];
        $this->solve($ip, [], $result, $k);
        return $result;
    }

    public function solve(array $ip, array $op, array &$result, int $k): void
    {
        if (count($ip) === 0) {
            if (array_sum($op) === $k) {
                $result[] = $op;
            }
            return;
        }

        $op1   = $op;
        $op2   = $op;
        $op2[] = $ip[0];

        $ip = array_slice($ip, 1);

        $this->solve($ip, $op1, $result, $k);
        $this->solve($ip, $op2, $result, $k);
    }
}
