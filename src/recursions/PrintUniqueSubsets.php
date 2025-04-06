<?php
namespace App\Recursions;

class PrintUniqueSubsets
{
    private array $subsets = [];

    public function solve(string $ip, string $op): void
    {
        if (strlen($ip) === 0) {
            $this->subsets[$op] = true;
            return;
        }

        $op1 = $op;
        $op2 = $op . $ip[0];
        $ip  = substr($ip, 1);

        $this->solve($ip, $op1);
        $this->solve($ip, $op2);
    }

    public function printUniqueSorted(): void
    {
        $result = array_keys($this->subsets);
        sort($result);
        foreach ($result as $item) {
            echo $item . PHP_EOL;
        }
    }
}
