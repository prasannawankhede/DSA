<?php
namespace App\Stacks;

class TrappingRainWaterBetter
{
    public function preFixMax(array $arr)
    {
        $n = count($arr);
        if ($n == 0) {
            return [];
        }

        $prefix    = array_fill(0, $n, 0);
        $prefix[0] = $arr[0];

        for ($i = 1; $i < $n; $i++) {
            $prefix[$i] = max($arr[$i], $prefix[$i - 1]);
        }

        return $prefix;
    }

    public function suffixMax(array $arr)
    {
        $n = count($arr);
        if ($n == 0) {
            return [];
        }

        $suffix         = array_fill(0, $n, 0);
        $suffix[$n - 1] = $arr[$n - 1];

        for ($i = $n - 2; $i >= 0; $i--) {
            $suffix[$i] = max($arr[$i], $suffix[$i + 1]);
        }

        return $suffix;
    }

    public function totalWater(array $arr)
    {
        $n = count($arr);
        if ($n == 0) {
            return 0;
        }

        $total    = 0;
        $leftMax  = $this->preFixMax($arr);
        $rightMax = $this->suffixMax($arr);

        for ($i = 0; $i < $n; $i++) {
            $water = min($leftMax[$i], $rightMax[$i]) - $arr[$i];
            $total += max(0, $water);
        }

        return $total;
    }
}
