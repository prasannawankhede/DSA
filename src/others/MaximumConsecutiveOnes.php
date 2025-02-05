<?php

namespace App;

class MaximumConsecutiveOnes{

    public function find($arr){

        $count = 0;
        $max = 0;

        for($i=0;$i<count($arr);$i++){

            if($arr[$i] == 1){
                $count++;

                if($count > $max){
                    $max = $count;

                }
            }
          else {
            $count = 0;
          }
        }

        return $max;
    }
}