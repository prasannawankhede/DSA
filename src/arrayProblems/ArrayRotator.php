<?php
namespace App\ArrayProblems;

class ArrayRotator {

    // Function to reverse a portion of the array
    private function reverseArray(&$arr, $start, $end) {
        while ($start < $end) {
            $temp = $arr[$start];
            $arr[$start] = $arr[$end];
            $arr[$end] = $temp;
            $start++;
            $end--;
        }
    }

    // Function to rotate `k` elements to the left
    public function rotateLeft(&$arr, $k) {
        $n = count($arr);
        if ($n == 0) return;

        // Normalize `k` to prevent unnecessary rotations
        $k = $k % $n;

        // Reverse first `k` elements
        $this->reverseArray($arr, 0, $k - 1);

        // Reverse remaining `n-k` elements
        $this->reverseArray($arr, $k, $n - 1);

        // Reverse the entire array
        $this->reverseArray($arr, 0, $n - 1);
    }
}
