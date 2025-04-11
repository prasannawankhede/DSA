<?php
namespace App\Greedy;

class FractionalKnapsack
{

    public $value;
    public $weight;

    public function __construct($value, $weight)
    {
        $this->value  = $value;
        $this->weight = $weight;
    }

    public function greedy($capacity, $items)
    {
        usort($items, function ($a, $b) {
            $ratioA = $a->value / $a->weight;
            $ratioB = $b->value / $b->weight;
            return $ratioB <=> $ratioA;
        });

        $totalValue = 0;
        $remaining  = $capacity;

        foreach ($items as $item) {
            if ($remaining >= $item->weight) {
                $totalValue += $item->value;
                $remaining -= $item->weight;
            } else {
                $fraction = $remaining / $item->weight;
                $totalValue += $item->value * $fraction;
                break;
            }
        }

        return $totalValue;
    }
}
