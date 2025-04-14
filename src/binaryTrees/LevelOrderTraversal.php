<?php
namespace App\BinaryTrees;

class LevelOrderTraversal
{
    public $root;

    public function __construct()
    {
        $this->root = null;
    }

    public function bfs($node)
    {
        if ($node === null) {
            return;
        }

        $queue = [];
        array_push($queue, $node);

        while (! empty($queue)) {
            $current = array_shift($queue);
            echo $current->data . " ";

            if ($current->left !== null) {
                array_push($queue, $current->left);
            }

            if ($current->right !== null) {
                array_push($queue, $current->right);
            }
        }
    }
}
