<?php
namespace App\BinarySearchTrees;

class FindKthLargest
{
    public function FindLargest($root, $k)
    {
        $counter  = 0;
        $kLargest = 0;

        $this->reverseInorder($root, $counter, $k, $kLargest);
        return $kLargest;
    }

    public function reverseInorder($root, &$counter, $k, &$kLargest)
    {
        if ($root === null || $counter >= $k) {
            return;
        }

        $this->reverseInorder($root->right, $counter, $k, $kLargest);
        $counter++;

        if ($counter === $k) {
            $kLargest = $root->data;
            return $kLargest;
        }
        $this->reverseInorder($root->left, $counter, $k, $kLargest);
    }
}
