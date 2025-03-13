<?php

namespace App\Recursions;

class PrintFromNToOne
{
    public function print(int $n)
    {
        if ($n < 1) return;

        echo $n;
        $this->print($n - 1);
    }
}
