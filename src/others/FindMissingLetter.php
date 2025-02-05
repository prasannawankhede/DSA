<?php

namespace App;

class FindMissingLetter{

    function findMissingLetter($arr) {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $startIndex = strpos($alphabet, $arr[0]);

    
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] !== $alphabet[$startIndex + $i]) {
                return $alphabet[$startIndex + $i];
            }
        }
    
        return '';
    }
    
}