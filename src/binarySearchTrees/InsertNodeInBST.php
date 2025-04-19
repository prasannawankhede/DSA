<?php
namespace App\BinarySearchTrees;

class InsertNodeInBST
{
    public function insert($root, $data)
    {
        if ($root === null) {
            return new TreeNode($data);
        }

        if ($data < $root->data) {
            $root->left = $this->insert($root->left, $data);
        } else {
            $root->right = $this->insert($root->right, $data); // fixed: passing $data
        }

        return $root;
    }
}
