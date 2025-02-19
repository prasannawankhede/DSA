<?php
namespace App\LinkedList;

class PalindromeLinkedList
{
    public function isPalindrome($head)
    {
        if ($head === null || $head->next === null) {
            return true; // A single-node or empty list is always a palindrome
        }

        $slow = $head;
        $fast = $head;

        // Find the middle using slow and fast pointers
        while ($fast !== null && $fast->next !== null) {
            $slow = $slow->next;
            $fast = $fast->next->next;
        }

        // Reverse the second half of the linked list
        $prev = null;
        while ($slow !== null) {
            $temp = $slow->next;
            $slow->next = $prev;
            $prev = $slow;
            $slow = $temp;
        }

        // Compare the first half with the reversed second half
        $firstHalf = $head;
        $secondHalf = $prev; // This is the head of the reversed second half

        while ($secondHalf !== null) {
            if ($firstHalf->value !== $secondHalf->value) {
                return false;
            }
            $firstHalf = $firstHalf->next;
            $secondHalf = $secondHalf->next;
        }

        return true;
    }
}
