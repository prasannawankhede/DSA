<?php
namespace App\BinarySearchTrees;

class FloorInBST
{
    public function floor($root, $key)
    {
        if ($root === null) {
            return null; // Return null if the tree is empty
        }

        $floor = -1; // We can initialize to -1 or null to signify no floor found

        while ($root !== null) {
            // If an exact match is found, return the node's data
            if ($root->data === $key) {
                return $root->data;
            }

            // If the key is smaller, move to the left
            if ($key < $root->data) {
                $root = $root->left;
            } else {
                // If the key is greater, update floor and move to the right
                $floor = $root->data;
                $root  = $root->right;
            }
        }

        return $floor; // Return the largest value less than or equal to key
    }
}
