<?php
namespace App\BinaryTrees;

class InorderTraversal
{
    public $root;

    public function __construct()
    {
        $this->root = null;
    }

    public function printInOrder($node)
    {
        if ($node === null) {
            return;
        }

        $this->printInOrder($node->left);
        echo $node->data . " ";
        $this->printInOrder($node->right);
    }
}
