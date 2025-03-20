<?php
namespace App\ArrayProblems;

class SetMatrixZeros
{
    public function setZero(&$arr)
    {
        $n = count($arr);
        $m = count($arr[0]);

        $rows = [];
        $cols = [];

        // Identify rows and columns to be zeroed
        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $m; $j++) {
                if ($arr[$i][$j] === 0) {
                    $rows[$i] = true;
                    $cols[$j] = true;
                }
            }
        }

        // Set entire row to zero
        for ($i = 0; $i < $n; $i++) {
            if (isset($rows[$i])) {
                for ($j = 0; $j < $m; $j++) {
                    $arr[$i][$j] = 0;
                }
            }
        }

        // Set entire column to zero (FIXED BUG)
        for ($j = 0; $j < $m; $j++) {
            if (isset($cols[$j])) {
                for ($i = 0; $i < $n; $i++) { // ✅ FIX: Changed $m to $n
                    $arr[$i][$j] = 0;
                }
            }
        }
    }
}
