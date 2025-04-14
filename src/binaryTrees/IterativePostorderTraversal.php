<?php
namespace App\BinaryTrees;

class IterativePostorderTraversal
{
    public $root;

    public function __construct()
    {
        $this->root = null;
    }

    public function postorderIterative($node)
    {
        if ($node === null) {
            return;
        }

        $stack1 = [];
        $stack2 = [];

        array_push($stack1, $node);

        while (! empty($stack1)) {
            $current = array_pop($stack1);

            array_push($stack2, $current);

            if ($current->left !== null) {
                array_push($stack1, $current->left);
            }

            if ($current->right !== null) {
                array_push($stack1, $current->right);
            }
        }

        while (! empty($stack2)) {
            $current = array_pop($stack2);
            echo $current->data . " ";
        }

    }
}
