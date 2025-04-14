<?php
namespace App\BinaryTrees;

class TreeNode
{
    public $data;
    public $left;
    public $right;

    public function __construct($data)
    {
        $this->data  = $data;
        $this->left  = null;
        $this->right = null;

    }
}
