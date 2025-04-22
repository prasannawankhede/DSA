<?php
namespace App\BinarySearchTrees;

class BinarySearchTreeChecker
{
    public function isBst($node, $min = null, $max = null): bool
    {
        if ($node === null) {
            return true;
        }

        if (($min !== null && $node->data <= $min) || ($max !== null && $node->data >= $max)) {
            return false;
        }

        return $this->isBst($node->left, $min, $node->data) &&
        $this->isBst($node->right, $node->data, $max);
    }
}
