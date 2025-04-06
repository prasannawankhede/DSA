<?php
namespace App\Recursions;

class PermutationWithSpaces
{
    public function solve(string $ip, string $op = ''): void
    {
        if ($op === '') {
            $op = $ip[0];
            $ip = substr($ip, 1);
        }

        if (strlen($ip) === 0) {
            echo $op . PHP_EOL;
            return;
        }

        $this->solve(substr($ip, 1), $op . '_' . $ip[0]);
        $this->solve(substr($ip, 1), $op . $ip[0]);
    }
}
