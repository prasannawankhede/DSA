<?php
namespace App\SlidingWindow;

class FruitIntoBaskets
{
    public function totalFruit(array $fruits): int
    {
        $l         = 0;
        $maxFruits = 0;
        $basket    = [];

        for ($r = 0; $r < count($fruits); $r++) {
            $fruit          = $fruits[$r];
            $basket[$fruit] = ($basket[$fruit] ?? 0) + 1;

            while (count($basket) > 2) {
                $leftFruit = $fruits[$l];
                $basket[$leftFruit]--;
                if ($basket[$leftFruit] === 0) {
                    unset($basket[$leftFruit]);
                }
                $l++;
            }
            $maxFruits = max($maxFruits, $r - $l + 1);
        }

        return $maxFruits;

    }
}
