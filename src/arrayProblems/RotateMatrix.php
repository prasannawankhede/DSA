<?php

namespace App\ArrayProblems;

class RotateMatrix{
    public function rotate(array &$matrix){

        $n = count($matrix);

        for($i=0;$i<$n;$i++){
            for($j=0;$j<$i;$j++){
                $temp=$matrix[$i][$j];
                $matrix[$i][$j] = $matrix[$j][$i];
                $matrix[$j][$i] = $temp;
            }
        }

        foreach($matrix as &$rows){
            $rows = array_reverse($rows);
        }
    }
}