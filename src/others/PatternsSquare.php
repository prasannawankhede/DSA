<?php

namespace App;

class PatternsSquare{

    public function print($n){

        for($i = 0; $i<$n; $i++){

            for($j =0; $j<$n;$j++){

                echo "*";
            }
            echo "\n";
        }
    }
}