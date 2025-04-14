<?php
namespace App\BinaryTrees;

class PostorderTraversal
{
    public $root;
    public function __construct()
    {
        $this->root = null;
    }

    public function postPrint($node)
    {
        if ($node === null) {
            return;
        }

        $this->postPrint($node->left);
        $this->postPrint($node->right);
        echo $node->data . " ";
    }
}
