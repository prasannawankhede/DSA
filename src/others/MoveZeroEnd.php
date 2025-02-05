<?php

namespace App;

class MoveZeroEnd{
    
    public function move($arr){

        $j = -1;

        for($i=0;$i<count($arr);$i++){

            if($arr[$i] == 0){
                $j= $i;
                break;
            }
        }

        for($i=$j+1;$i<count($arr);$i++){

            if($arr[$i] != 0 && $j != -1){
                $temp=$arr[$i];
                $arr[$i]=$arr[$j];
                $arr[$j]=$temp;
                $j++;
            }
        }
        return $arr;
    }
}