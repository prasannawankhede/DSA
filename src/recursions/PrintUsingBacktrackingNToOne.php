<?php

namespace App\Recursions;

class PrintUsingBacktrackingNToOne
{
    public function print(int $n, int $i = 1)
    {
        if ($i > $n) return;

        $this->print($n, $i + 1);
        echo $i;
    }
}
