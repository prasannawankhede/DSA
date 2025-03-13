<?php

namespace App\Recursions;

class PrintFromOneToN{

    public function print($i,$n){

        if($i > $n) return;

        echo $i;
        $this->print($i + 1,$n);

    }
}