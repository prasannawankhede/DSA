<?php
namespace App\Recursions;

class PrintNTimes
{
    private int $count = 0;

    public function print()
    {
        if ($this->count === 5) return;

        echo 1;
        $this->count++;
        $this->print();
    }
}
