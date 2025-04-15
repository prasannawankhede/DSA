<?php
namespace App\BinaryTrees;

class HeightOfBinaryTree
{
    public function height($node)
    {
        if ($node === null) {
            return -1;
        }

        $leftHeight  = $this->height($node->left);
        $rightHeight = $this->height($node->right);

        return max($leftHeight, $rightHeight) + 1;
    }
}
