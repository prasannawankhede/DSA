<?php

namespace App;

class LargestElementInArray
{
    /**
     * Find the largest element in the array.
     *
     * @param array $arr
     * @return int|null
     */
    public function search($arr)
    {
        if (empty($arr)) {
            return null; // Handle empty arrays
        }

        $largest = $arr[0]; // Assume the first element is the largest
        for ($i = 1; $i < count($arr); $i++) { // Start loop from the second element
            if ($arr[$i] > $largest) {
                $largest = $arr[$i]; // Update the largest value
            }
        }

        return $largest; // Return the largest value after the loop
    }
}
