<?php
namespace App\LinkedList;

class LLNode
{
    public $next;
    public $value;

    public function __construct($value)
    {
        $this->next  = null;
        $this->value = $value;
    }
}

class Add1TonumberRepresentedLL
{
    public function reverse($head)
    {
        $prev    = null;
        $current = $head;

        while ($current !== null) {
            $next          = $current->next;
            $current->next = $prev;
            $prev          = $current;
            $current       = $next;
        }

        return $prev; // This is the new head after reversal
    }

    public function addOne($head)
    {
        if ($head === null) {
            return null; // Return null for an empty list
        }

        // Step 1: Reverse the linked list
        $head    = $this->reverse($head);
        $current = $head;
        $carry   = 1;

        // Step 2: Traverse the list and add 1
        while ($current !== null) {
            $current->value += $carry;

            if ($current->value < 10) {
                $carry = 0; // No carry needed anymore
                break;
            }

            $current->value = 0;
            $carry          = 1;

            if ($current->next === null && $carry === 1) {
                $current->next = new LLNode(1);
                break;
            }

            $current = $current->next;
        }

        // Step 3: Reverse back to original order and return the new head
        return $this->reverse($head);
    }
}
