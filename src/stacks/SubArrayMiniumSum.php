<?php
namespace App\Stacks;

class SubArrayMiniumSum {
    public function sumSubarrayMins($arr) {
        $MOD = 1000000007;
        $n = count($arr);
        
        $left = $this->pse($arr, $n);
        $right = $this->nse($arr, $n);
        
        $sum = 0;
        for ($i = 0; $i < $n; $i++) {
            $sum = ($sum + $arr[$i] * $left[$i] * $right[$i]) % $MOD;
        }
        
        return $sum;
    }
    
    public function pse(array $arr, $n) {
        $stack = [];
        $result = array_fill(0, $n, 0);
        
        for ($i = 0; $i < $n; $i++) {
            while (!empty($stack) && $arr[end($stack)] > $arr[$i]) {
                array_pop($stack);
            }
            $result[$i] = empty($stack) ? $i + 1 : $i - end($stack);
            $stack[] = $i;
        }
        
        return $result;
    }
    
    public function nse(array $arr, $n) {
        $stack = [];
        $result = array_fill(0, $n, 0);
        
        for ($i = $n - 1; $i >= 0; $i--) {
            while (!empty($stack) && $arr[end($stack)] >= $arr[$i]) {
                array_pop($stack);
            }
            $result[$i] = empty($stack) ? $n - $i : end($stack) - $i;
            $stack[] = $i;
        }
        
        return $result;
    }
}