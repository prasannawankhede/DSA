<?php
namespace App\Recursions;

class ParameterisedSumofN
{
    public function sum($n, $sum)
    {
        if ($n < 1) {
            echo $sum;
            return;
        }

        $this->sum($n - 1, $sum + $n);
    }
}
