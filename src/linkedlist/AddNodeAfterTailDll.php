<?php

// namespace App\LinkedList;

// class AddNodeAfterTailDll{

//     public function insertAfterTail(?DLLNode $head, int $value):?DLLNode{

//         $newNode = new DLLNode($value);

//         if($head === null){
//             return null;
//         }

//         $current = $head;
//         if($current->next === null){
//             return (new AddNodeAfterHeadDll())->insertAfterHead($head,$value);
//         }else{

//             while($current->next !== null){

//                 $current = $current->next;

//             }

//             $tail = $current;
//             $tail->next = $newNode;
//             $newNode->prev = $tail;

//             return $head;
//         }
//     }
// }


namespace App\LinkedList;

class AddNodeAfterTailDll
{
    public function insertAfterTail(?DLLNode $head, int $value): ?DLLNode
    {
        if ($head === null) {
            return null;
        }

        $newNode = new DLLNode($value);
        $current = $head;

        while ($current->next !== null) {
            $current = $current->next;
        }

        $current->next = $newNode;
        $newNode->prev = $current;

        return $head;
    }
}
