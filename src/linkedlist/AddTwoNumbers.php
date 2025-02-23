<?php
namespace App\LinkedList;

class LLNode {
    public $value;
    public $next;

    public function __construct($value = 0, $next = null) {
        $this->value = $value;
        $this->next = $next;
    }
}

class AddTwoNumbers
{
    public function addLists($l1, $l2)
    {
        $dummy = new LLNode(0); // Dummy node to simplify list creation
        $current = $dummy;
        $carry = 0;

        while ($l1 !== null || $l2 !== null || $carry !== 0) {
            $sum = $carry;

            if ($l1 !== null) {
                $sum += $l1->value;
                $l1 = $l1->next;
            }

            if ($l2 !== null) {
                $sum += $l2->value;
                $l2 = $l2->next;
            }

            $carry = intdiv($sum, 10); // Extract carry
            $current->next = new LLNode($sum % 10); // Store the last digit of sum
            $current = $current->next;
        }

        return $dummy->next; // Return the next of dummy (head of the new list)
    }
}
