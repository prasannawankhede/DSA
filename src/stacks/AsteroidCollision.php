<?php
namespace App\Stacks;

class AsteroidCollision
{
    public function space(array $arr): array
    {
        $n  = count($arr);
        $st = [];

        for ($i = 0; $i < $n; $i++) {
            if ($arr[$i] > 0) {
                array_push($st, $arr[$i]);
            } else {
                // Destroy smaller positives moving right
                while (! empty($st) && end($st) > 0 && end($st) < abs($arr[$i])) {
                    array_pop($st);
                }

                // Handle equal size collision
                if (! empty($st) && end($st) === abs($arr[$i])) {
                    array_pop($st); // Destroy both
                    continue;       // Skip pushing the negative asteroid
                } else if (empty($st) || end($st) < 0) {
                    array_push($st, $arr[$i]);
                }
            }
        }
        return $st;
    }
}
