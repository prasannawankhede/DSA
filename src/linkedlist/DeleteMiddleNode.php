<?php

namespace App\LinkedList;

class LLNode {
    public $data;
    public $next;

    public function __construct($data, $next = null) {
        $this->data = $data;
        $this->next = $next;
    }
}

class DeleteMiddleNode {
    public function deleteMiddle($head) {
        if ($head === null || $head->next === null) {
            return null;
        }

        $slow = $head;
        $fast = $head;
        $prev = null;

        while ($fast !== null && $fast->next !== null) {
            $prev = $slow;
            $slow = $slow->next;
            $fast = $fast->next->next;
        }

        if ($prev !== null) {
            $prev->next = $slow->next;
        } else {
            // Special case: Only two nodes in the list
            return $head->next;
        }

        return $head;
    }
}
