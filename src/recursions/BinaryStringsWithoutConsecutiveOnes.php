<?php
namespace App\Recursions;

class BinaryStringsWithoutConsecutiveOnes
{
    public function solve(int $n): array
    {
        $ans = [];
        $this->generate($n, "", $ans);
        return $ans;
    }

    public function generate($n, String $op, &$ans)
    {
        if ($n === 0) {
            $ans[] = $op;
            return;
        }

        $this->generate($n - 1, $op . "0", $ans);

        if (strlen($op) === 0 || substr($op, -1) !== "1") {
            $this->generate($n - 1, $op . "1", $ans);
        }

    }
}
