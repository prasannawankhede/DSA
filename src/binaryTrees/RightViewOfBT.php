<?php
namespace App\BinaryTrees;

class RightViewOfBT
{
    private $result = [];

    public function view($node, $level = 0)
    {
        if ($node === null) {
            return;
        }

        // If this is the first node of this level
        if ($level >= count($this->result)) {
            $this->result[] = $node->data;
        }

        // First traverse right, then left to get the rightmost element at each level
        $this->view($node->right, $level + 1);
        $this->view($node->left, $level + 1);
    }

    public function getRightView()
    {
        return $this->result;
    }
}
