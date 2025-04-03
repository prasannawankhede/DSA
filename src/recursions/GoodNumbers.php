<?php
namespace App\Recursions;

class GoodNumbers
{
    private $mod = 1000000007;

    public function countGoodNum($n)
    {
        $even = (int)(($n + 1) / 2);
        $odd = (int)($n / 2);

        $first = $this->pow(5, $even);
        $second = $this->pow(4, $odd);

        return (int)(($first * $second) % $this->mod);
    }

    private function pow($x, $n)
    {
        if ($n === 0) {
            return 1;
        }

        $temp = $this->pow($x, (int)($n / 2));

        if ($n % 2 === 0) {
            return ($temp * $temp) % $this->mod;
        } else {
            return ($x * $temp * $temp) % $this->mod;
        }
    }
}