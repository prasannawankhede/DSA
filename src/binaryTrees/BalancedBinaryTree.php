<?php
namespace App\BinaryTrees;

class BalancedBinaryTree
{
    public function isBalanced($node)
    {
        return $this->height($node) !== -1;
    }

    private function height($node)
    {

        if ($node === null) {
            return 0;
        }

        $left  = $this->height($node->left);
        $right = $this->height($node->right);

        if ($left === -1 || $right === -1) {
            return -1;
        }

        if (abs($left - $right) > 1) {
            return -1;
        }

        return max($left, $right) + 1;

    }

}
