<?php
namespace App\BinaryTrees;

class LeftViewOfBT
{
    private $result = [];

    public function view($node, $level = 0)
    {
        if ($node === null) {
            return;
        }

        if ($level >= count($this->result)) {
            $this->result[] = $node->data;
        }

        $this->view($node->left, $level + 1);
        $this->view($node->right, $level + 1);
    }

    public function getResult()
    {
        return $this->result;
    }
}
