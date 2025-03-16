<?php
namespace App\LinkedList;


class Node
{
    public $value;
    public $next;
    
    public function __construct($value)
    {
        $this->value = $value;
        $this->next  = null;
    }
}

class RotateLLByK
{

    public function findLastNode($head,$n){

        $lastNode = $head;

        for($i = 1;$i < $n; $i++){
            $lastNode = $lastNode->next;
        }
        return $lastNode;
    }

    public function rotate($head,$k)
    {

        if ($head === null || $head->next === null || $k === 0) {  // ✅ Edge cases
            return $head;
        }


        $len  = 1;
        $tail = $head;

        while ($tail->next !== null) {
            $len++;
            $tail = $tail->next;
        }
        $k = $k % $len;

        if($k % $len === 0) return $head;


        $tail->next = $head;

        $newLastNode = $this->findLastNode($head,$len - $k);
        $head = $newLastNode->next;
        $newLastNode->next = null;
        return $head;
    }
}
