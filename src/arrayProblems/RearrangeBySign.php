<?php

namespace App\ArrayProblems;

class RearrangeBySign{

    public function arrange($arr){
        if(empty($arr)) return 0;

        $pos = [];
        $neg = [];

        foreach($arr as $a){
            if($a < 0){
                $pos[] = $a;
            }else $neg[] = $a;
        }

        $result = [];
        $i = 0;
        $j = 0;

        while($i < count($pos) && $j < count($neg)){
            $result[] = $pos[$i];
            $result[] = $neg[$i];
            $i++;
            $j++;
        }

        while($i < count($pos)){
            $result[] = $pos[$i];
            $i++;
        }
        
        while($j < count($neg)){
            $result[] = $neg[$i];
            $j++;
        }

        return $result;
    }
}