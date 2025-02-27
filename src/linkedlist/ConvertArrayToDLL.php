<?php
namespace App\LinkedList;

use App\LinkedList\DLLNode;

class ConvertArrayToDLL
{
    public function arrayToDLL(array $arr): ?DLLNode
    {
        if (empty($arr)) {
            return null;
        }

        $head    = new DLLNode($arr[0]);
        $current = $head;

        for ($i = 1; $i < count($arr); $i++) {

            $newNode       = new DLLNode($arr[$i]);
            $current->next = $newNode;
            $newNode->prev = $current;
            $current       = $newNode;
        }
        return $head;
    }
}
