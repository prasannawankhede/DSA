<?php
namespace App\Recursions;

class JosephusProblem
{
    public function solve(int $n, int $k):int
    {
        $persons = range(1, $n);
        $ans     = -1;
        $this->find($persons, $k - 1, 0, $ans);

        return $ans;
    }

    public function find(array $persons, int $k,int $index,int &$ans)
    {
        if (count($persons) === 1) {
            $ans = $persons[0];
            return;
        }

        $index = ($index + $k) % count($persons);

        array_splice($persons, $index, 1);

        $this->find($persons, $k, $index, $ans);
    }
}
