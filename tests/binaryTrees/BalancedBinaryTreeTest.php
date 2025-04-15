<?php
use App\BinaryTrees\BalancedBinaryTree;
use App\BinaryTrees\TreeNode;
use PHPUnit\Framework\TestCase;

class BalancedBinaryTreeTest extends TestCase
{
    public function testBalancedTree()
    {
        $root               = new TreeNode(1);
        $root->left         = new TreeNode(2);
        $root->right        = new TreeNode(3);
        $root->left->left   = new TreeNode(4);
        $root->left->right  = new TreeNode(5);
        $root->right->right = new TreeNode(6);

        $checker = new BalancedBinaryTree();
        $this->assertTrue($checker->isBalanced($root));
    }

    public function testUnbalancedTree()
    {
        $root                   = new TreeNode(1);
        $root->left             = new TreeNode(2);
        $root->left->left       = new TreeNode(3);
        $root->left->left->left = new TreeNode(4);

        $checker = new BalancedBinaryTree();
        $this->assertFalse($checker->isBalanced($root));
    }

    public function testEmptyTree()
    {
        $checker = new BalancedBinaryTree();
        $this->assertTrue($checker->isBalanced(null)); // Empty tree is balanced
    }

    public function testSingleNode()
    {
        $root    = new TreeNode(1);
        $checker = new BalancedBinaryTree();
        $this->assertTrue($checker->isBalanced($root)); // Single node is balanced
    }
}
