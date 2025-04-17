<?php
namespace App\BinaryTrees;

class LowestCommonAncestor
{
    public function lca($root, $node1, $node2)
    {
        if ($root === null) {
            return null;
        }

        if ($root->data === $node1 || $root->data === $node2) {
            return $root;
        }

        $left  = $this->lca($root->left, $node1, $node2);
        $right = $this->lca($root->right, $node1, $node2);

        if ($left !== null && $right !== null) {
            return $root;
        }

        return $left ?? $right;
    }
}
