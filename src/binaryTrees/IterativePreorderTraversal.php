<?php
namespace App\BinaryTrees;

class IterativePreorderTraversal
{
    public $root;

    public function __construct()
    {
        $this->root = null;
    }

    public function preorderIterative($node)
    {
        if ($node === null) {
            return;
        }

        $stack = [];
        array_push($stack, $node);

        while (! empty($stack)) {
            $current = array_pop($stack);
            echo $current->data . " ";

            // Push right first so that left is processed first
            if ($current->right !== null) {
                array_push($stack, $current->right);
            }

            if ($current->left !== null) {
                array_push($stack, $current->left);
            }
        }
    }
}
