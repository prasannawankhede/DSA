<?php

 namespace App;

 class LinerSearch{
    
    public function search($target,$arr){
        for($i =0 ;$i<count($arr);$i++){
            if($arr[$i]==$target){
                return $i;
            }

        }
        return -1;
    }
 }