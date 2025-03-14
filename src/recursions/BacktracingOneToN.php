<?php

namespace App\Recursions;

class BacktracingOneToN{

    public function print($i,$n){

        if($i < 1) return;

        $this->print($i - 1,$n);
        echo $i;

    }
}