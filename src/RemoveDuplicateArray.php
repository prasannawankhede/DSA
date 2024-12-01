<?php
namespace App;

class RemoveDuplicateArray{

    public function remove($arr){

        $i=0;

        for($j=1;$j<count($arr);$j++){
            if($arr[$i] != $arr[$j]){
                $arr[$i + 1] = $arr[$j];
                $i++;
            }
        }
        return $i+1;
    }
}