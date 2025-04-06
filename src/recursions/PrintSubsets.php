<?php
namespace App\Recursions;

class PrintSubsets
{
    public function solve(String $ip, String $op)
    {
        if (strlen($ip) === 0) {
            echo $op . PHP_EOL;
            return;
        }

        $op1 = $op;
        $op2 = $op;

        $op2 .= $ip[0];
        $ip = substr($ip, 1);

        $this->solve($ip, $op1);
        $this->solve($ip, $op2);

    }
}
