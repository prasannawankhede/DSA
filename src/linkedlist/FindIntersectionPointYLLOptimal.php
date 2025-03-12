<?php

namespace App\LinkedList;

class FindIntersectionPointYLLOptimal {
    public function findIntersection($head1, $head2) {
        if ($head1 === null || $head2 === null) return null;

        $temp1 = $head1;
        $temp2 = $head2;

        while ($temp1 !== $temp2) {
            $temp1 = ($temp1 === null) ? $head2 : $temp1->next;
            $temp2 = ($temp2 === null) ? $head1 : $temp2->next;
        }

        return $temp1;
    }
}
