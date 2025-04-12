<?php
namespace App\Greedy;

class LemonadeChange
{
    public function findChange(array $bills): bool
    {
        $five = 0;
        $ten  = 0;

        for ($i = 0; $i < count($bills); $i++) {
            if ($bills[$i] === 5) {
                $five++;
            } else if ($bills[$i] === 10) {
                if ($five) {
                    $five--;
                    $ten++;
                } else {
                    return false;
                }
            } else if ($bills[$i] === 20) {
                if ($ten >= 1 && $five >= 1) {
                    $ten--;
                    $five--;
                } else if ($five >= 3) {
                    $five -= 3;
                } else {
                    return false;
                }
            }
        }
        return true;
    }
}
