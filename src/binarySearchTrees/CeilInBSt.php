<?php
namespace App\BinarySearchTrees;

class CeilInBST
{
    public function ceil($root, $key)
    {
        if ($root === null) {
            return null; // Return null if the tree is empty
        }

        $ceil = -1;

        while ($root !== null) {
            // If an exact match is found, return the node's data
            if ($root->data === $key) {
                return $root->data;
            }

            // If the key is greater, move to the right
            if ($key > $root->data) {
                $root = $root->right;
            } else {
                // If the key is smaller, update ceil and move to the left
                $ceil = $root->data;
                $root = $root->left;
            }
        }

        return $ceil; // Return the smallest value greater than or equal to key
    }
}
