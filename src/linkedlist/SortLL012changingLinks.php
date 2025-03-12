<?php
namespace App\LinkedList;

use App\LinkedList\LLNode;

class SortLL012changingLinks
{

    public function sort($head)
    {

        if ($head === null || $head->next === null) {
            return $head;
        }

        $zeroHead = new LLnode(-1);
        $oneHead  = new LLnode(-1);
        $twoHead  = new LLnode(-1);

        $zero = $zeroHead;
        $one  = $oneHead;
        $two  = $twoHead;
        $temp = $head;

        while ($temp !== null) {

            if ($temp->value === 0) {
                $zero->next = $temp;
                $zero       = $zero->next;
            } else if ($temp->value === 1) {
                $one->next = $temp;
                $one       = $one->next;
            } else {
                $two->next = $temp;
                $two       = $two->next;
            }

            $temp = $temp->next;
        }

        $zero->next = ($oneHead->next) ? $oneHead->next : $twoHead->next;
        $one->next  = $twoHead->next;
        $two->next  = null;

        $newHead = $zeroHead->next;
        return $newHead;

    }
}
