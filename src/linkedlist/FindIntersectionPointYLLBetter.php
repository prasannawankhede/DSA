<?php
namespace App\LinkedList;

class FindIntersectionPointYLLBetter
{
    public function findIntersection($temp1, $temp2, $d)
    {
        while ($d > 0 && $temp1 !== null) {
            $d--;
            $temp1 = $temp1->next;
        }

        while ($temp1 !== null && $temp2 !== null) {
            if ($temp1 === $temp2) {
                return $temp1; // Found intersection
            }
            $temp1 = $temp1->next;
            $temp2 = $temp2->next;
        }

        return null; // No intersection found
    }

    public function traverse($head1, $head2)
    {
        if ($head1 === null || $head2 === null) {
            return null;
        }

        // Calculate the lengths of both linked lists
        $temp = $head1;
        $n1 = 0;
        while ($temp !== null) {
            $n1++;
            $temp = $temp->next;
        }

        $temp = $head2;
        $n2 = 0;
        while ($temp !== null) {
            $n2++;
            $temp = $temp->next;
        }

        // Find the longer list and move its pointer ahead
        if ($n1 > $n2) {
            return $this->findIntersection($head1, $head2, $n1 - $n2);
        } else {
            return $this->findIntersection($head2, $head1, $n2 - $n1);
        }
    }
}
