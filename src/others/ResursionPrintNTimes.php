<?php

namespace App;

class ResursionPrintNTimes{

    public function do($n){

        if($n<=0){
            return;
        }
        echo "hi\n";

        $this->do($n - 1);
    }
}