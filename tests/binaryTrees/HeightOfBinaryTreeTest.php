<?php
use App\BinaryTrees\HeightOfBinaryTree;
use App\BinaryTrees\TreeNode;
use PHPUnit\Framework\TestCase;

class HeightOfBinaryTreeTest extends TestCase
{
    public function testHeightOfBinaryTree()
    {
        $tree = new HeightOfBinaryTree();

        // Create binary tree:
        $root             = new TreeNode(1);
        $root->left       = new TreeNode(2);
        $root->right      = new TreeNode(3);
        $root->left->left = new TreeNode(4);

        // Longest path is: 1 -> 2 -> 4
        $height = $tree->height($root);

        $this->assertEquals(2, $height);
    }

    public function testEmptyTree()
    {
        $tree = new HeightOfBinaryTree();

        $this->assertEquals(-1, $tree->height(null)); // empty tree height is -1
    }

    public function testSingleNode()
    {
        $tree = new HeightOfBinaryTree();

        $root = new TreeNode(10);
        $this->assertEquals(0, $tree->height($root)); // height is 0 for single node
    }
}
