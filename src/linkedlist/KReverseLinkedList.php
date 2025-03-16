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

class KReverseLinkedList
{
    public function reverse(?Node $head): ?Node
    {
        $temp = $head;
        $prev = null;
        while ($temp !== null) {
            $next       = $temp->next;
            $temp->next = $prev;
            $prev       = $temp;
            $temp       = $next;
        }
        return $prev;
    }

    public function kNode(?Node $temp, int $k): ?Node
    {
        while ($temp !== null && --$k > 0) {
            $temp = $temp->next;
        }
        return $temp;
    }

    public function KReverse(?Node $head, int $k): ?Node
    {
        // If k is 1, the list should remain unchanged
        if ($k === 1) {
            return $head;
        }

        $temp = $head;
        $prevLast = null;

        while ($temp !== null) {
            // Find the k-th node in the current chunk
            $KTHNode = $this->kNode($temp, $k);

            // If the k-th node is null, it means the remaining nodes are less than k
            if ($KTHNode === null) {
                if ($prevLast) {
                    // Attach the remaining nodes as is (do not reverse them)
                    $prevLast->next = $temp;
                }
                break;
            }

            // Save the next node after the k-th node
            $nextNode = $KTHNode->next;

            // Disconnect the k-th node to reverse the current chunk
            $KTHNode->next = null;

            // Reverse the current chunk
            $reversedChunkHead = $this->reverse($temp);

            // If this is the first chunk, update the head of the list
            if ($head === $temp) {
                $head = $reversedChunkHead;
            } else {
                // Otherwise, attach the reversed chunk to the previous chunk
                $prevLast->next = $reversedChunkHead;
            }

            // Move to the next chunk
            $prevLast = $temp;
            $temp = $nextNode;
        }

        return $head; // Ensure we return the updated head
    }

    
    
}
