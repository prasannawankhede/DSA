<?php
namespace App\Recursions;

class LetterCasePermutation
{
    public function solve(String $ip, String $op, array &$arr): void
    {
        if (strlen($ip) === 0) {
            $arr[] = $op;
            return;
        }

        if (ctype_alpha($ip[0])) {

            $op1 = $op;
            $op2 = $op;

            $op1 .= strtolower($ip[0]);
            $op2 .= strtoupper($ip[0]);

            $ip = substr($ip, 1);

            $this->solve($ip, $op1, $arr);
            $this->solve($ip, $op2, $arr);
        } else {
            $op .= $ip[0];
            $ip = substr($ip, 1);
            $this->solve($ip, $op, $arr);
        }
    }
}
