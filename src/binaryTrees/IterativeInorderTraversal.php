<?php
namespace App\BinaryTrees;

class IterativeInorderTraversal
{
    public $root;

    public function __construct()
    {
        $this->root = null;
    }

    public function inorderIterative($node)
    {
        $stack   = [];
        $current = $node;

        while ($current !== null || ! empty($stack)) {

            while ($current !== null) {
                array_push($stack, $current);
                $current = $current->left;
            }

            $current = array_pop($stack);
            echo $current->data . " ";

            $current = $current->right;
        }
    }
}
