<?php
namespace App\BinaryTrees;

class DiameterOfBinaryTree
{
    public function findDiameter($node, &$maxi)
    {
        if ($node === null) {
            return 0;
        }

        $left  = $this->findDiameter($node->left, $maxi);
        $right = $this->findDiameter($node->right, $maxi);

        $maxi = max($maxi, $left + $right);

        return max($left, $right) + 1;
    }
}
