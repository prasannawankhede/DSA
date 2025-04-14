<?php
namespace App\BinaryTrees;

class PreorderTraversal
{

    public $root;

    public function __construct()
    {
        $this->root = null;
    }
    public function printTree($node)
    {
        if ($node === null) {
            return;
        }

        echo $node->data . " ";
        $this->printTree($node->left);
        $this->printTree($node->right);
    }
}
