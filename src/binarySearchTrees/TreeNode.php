<?php
namespace App\BinarySearchTrees;

class TreeNode
{
    public $data;
    public $left;
    public $right;

    public function __construct($data = 0, $left = null, $right = null)
    {
        $this->data  = $data;
        $this->left  = $left;
        $this->right = $right;
    }
}
