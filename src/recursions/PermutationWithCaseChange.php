<?php
namespace App\Recursions;

class PermutationWithCaseChange
{
    public function solve(string $ip, string $op = ''): void
    {
        if (strlen($ip) === 0) {
            echo $op . PHP_EOL;
            return;
        }

        $ch = $ip[0];
        $ip = substr($ip, 1);

        $this->solve($ip, $op . strtolower($ch));
        $this->solve($ip, $op . strtoupper($ch));
    }
}
