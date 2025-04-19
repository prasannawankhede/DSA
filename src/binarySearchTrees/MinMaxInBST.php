<?php
namespace App\BinarySearchTrees;

class MinMaxInBST
{
    public function findMin($root)
    {

        if ($root === null) {
            return;
        }

        while ($root->left !== null) {
            $root = $root->left;
        }
        return $root->data;
    }

    public function findMax($root)
    {
        if ($root === null) {
            return;
        }

        while ($root->right !== null) {
            $root = $root->right;
        }
        return $root->data;
    }
}
