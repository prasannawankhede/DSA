<?php
namespace App\LinkedList;

class RemoveFromValueLL extends LinkedListBase
{

    public function removevalue($value)
    {

        if ($this->isEmpty()) {
            return null;
        }

        if ($this->head->value === $value) {
            $removedValue = $this->head->value;
            $this->head = $this->head->next;
            $this->size--;
            return $removedValue;
        } else {

            $prev = $this->head;

            while ($prev->next !== null && $prev->next->value !== $value) {

                $prev = $prev->next;
            }
            if ($prev->next !== null) {
                $removeNode = $prev->next;
                $prev->next = $removeNode->next;
                $this->size--;
                return $removeNode->value;
            }

        }
        return null;
    }
}
