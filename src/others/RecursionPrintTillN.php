<?php
namespace App;

class RecursionPrintTillN{

    public function do($i,$n){

        if($i>$n){
            return;
        }

        echo "$i\n";

        $this->do($i + 1,$n);

    }
}