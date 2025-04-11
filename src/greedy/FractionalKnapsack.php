<?php
namespace App\Greedy;

class FractionalKnapsack
{
    public int $value;
    public int $weight;

    public function __construct(int $value, int $weight)
    {
        $this->value  = $value;
        $this->weight = $weight;
    }

    public function getMaxValue(int $capacity, array $items): float
    {
        // Sort items by value/weight ratio in descending order
        usort($items, function (FractionalKnapsack $a, FractionalKnapsack $b) {
            $r1 = $a->value / $a->weight;
            $r2 = $b->value / $b->weight;
            return $r2 <=> $r1;
        });

        $currentWeight = 0;
        $finalValue    = 0.0;

        foreach ($items as $item) {
            if ($currentWeight + $item->weight <= $capacity) {
                $currentWeight += $item->weight;
                $finalValue += $item->value;
            } else {
                $remaining = $capacity - $currentWeight;
                $finalValue += ($item->value / $item->weight) * $remaining;
                break;
            }
        }

        return round($finalValue, 2);
    }
}
