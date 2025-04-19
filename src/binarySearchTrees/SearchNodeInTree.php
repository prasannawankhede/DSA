<?php
namespace App\BinarySearchTrees;

class SearchNodeInTree
{
    public function findNode($root, $data)
    {
        if ($root === null) {
            return null;
        }

        if ($root->data === $data) {
            return $root;
        }

        if ($data < $root->data) {
            return $this->findNode($root->left, $data);
        } else {
            return $this->findNode($root->right, $data);
        }
    }
}
