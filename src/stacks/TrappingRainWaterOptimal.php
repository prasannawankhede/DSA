<?php
namespace App\Stacks;

class TrappingRainWaterOptimal
{
    public function trap(array $height)
    {
        $n = count($height);
        if ($n <= 2) {
            return 0;
        }

        $left     = 0;
        $right    = $n - 1;
        $leftMax  = $height[$left];
        $rightMax = $height[$right];
        $water    = 0;

        while ($left < $right) {
            if ($height[$left] <= $height[$right]) {
                if ($height[$left] >= $leftMax) {
                    $leftMax = $height[$left];
                } else {
                    $water += $leftMax - $height[$left];
                }
                $left++;
            } else {
                if ($height[$right] >= $rightMax) {
                    $rightMax = $height[$right];
                } else {
                    $water += $rightMax - $height[$right];
                }
                $right--;
            }
        }

        return $water;
    }
}
