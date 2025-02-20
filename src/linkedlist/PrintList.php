<?php
namespace App\LinkedList;

class PrintList extends LinkedListBase
{

    public function printList($head)
    {

        if ($head === null) {
            return null;
        } else {

            $current = $head;
            $list    = "";

            while ($current) {

                $list    = $list . $current->value . "->";
                $current = $current->next;
            }
        }
        return $list;

    }
}
