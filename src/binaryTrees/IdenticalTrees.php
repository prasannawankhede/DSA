<?php
namespace App\BinaryTrees;

class IdenticalTrees
{
    public function isIdentical($node1, $node2)
    {
        if ($node1 === null && $node2 === null) {
            return true;
        }

        if ($node1 === null || $node2 === null) {
            return false;
        }

        return ($node1->data === $node2->data)&&
        $this->isIdentical($node1->left, $node2->left)&&
        $this->isIdentical($node1->right, $node2->right);
    }
}
