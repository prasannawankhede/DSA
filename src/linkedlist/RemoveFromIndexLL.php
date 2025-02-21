<?php
namespace App\LinkedList;

class RemoveFromIndexLL extends LinkedListBase
{

    public function removeIndex($index)
    {

        if ($index < 0 || $index >= $this->size) {
            return null;
        }
        $rn = null;

        if ($index === 0) {
            $value = $this->head->value;

            $this->head = $this->head->next;

        } else {

            $prev = $this->head;

            for ($i = 0; $i < $index - 1; $i++) {
                $prev = $prev->next;
            }

            $rn   = $prev->next;
            $value = $rn->value;
            $prev->next = $rn->next;

        }
        $this->size--;
        return $value;

    }
}
