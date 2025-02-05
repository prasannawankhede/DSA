<?php

namespace App;

class BubbleSort{

    public function sort($arr){

        do{

            $swapped = false;

        for($i=0; $i<count($arr)-1; $i++){

            if($arr[$i] > $arr[$i +1]){
                $temp = $arr[$i];
                $arr[$i] = $arr[$i + 1];
                $arr[$i +1] = $temp;
               

 $swapped = true;

            }

        }
    }while($swapped);
    return $arr;

}
}