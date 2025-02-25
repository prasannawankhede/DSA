<?php
namespace App\ArrayProblems;

class RemoveDuplicatesfromSortedArray
{
    public function removeDuplicates(&$nums)
    {
        if (empty($nums)) {
            return 0;
        }

        $index = 0;

        for ($i = 1; $i < count($nums); $i++) {
            if ($nums[$index] !== $nums[$i]) {
                $index++;                  // Move to the next unique position
                $nums[$index] = $nums[$i]; // Update value
            }
        }

        return $index + 1; // New length of the unique array
    }

}
 