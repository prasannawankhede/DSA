<?php
namespace App\BinaryTrees;

class IterativePostorderTraversalOneStack
{
    public $root;

    public function __construct()
    {
        $this->root = null;
    }

    public function postorderIterative($node)
    {
        $current     = $node;
        $stack       = [];
        $lastVisited = null;

        while ($current !== null || ! empty($stack)) {

            if ($current !== null) {
                array_push($stack, $current);
                $current = $current->left;
            } else {
                $peekNode = end($stack);

                if ($peekNode->right !== null && $lastVisited !== $peekNode->right) {
                    $current = $peekNode->right;
                } else {
                    echo $peekNode->data . " ";
                    $lastVisited = array_pop($stack);
                }
            }
        }
    }
}
