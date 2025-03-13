<?php
namespace App\Recursions;

class PrintNTimes
{
    public function print(int $count = 0)
    {
        if ($count === 5) return;

        echo 1;
        $this->print($count + 1);
    }
}
