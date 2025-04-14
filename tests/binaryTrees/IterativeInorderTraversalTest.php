<?php

use App\BinaryTrees\IterativeInorderTraversal;
use App\BinaryTrees\TreeNode;
use PHPUnit\Framework\TestCase;

class IterativeInorderTraversalTest extends TestCase
{
    public function testEmptyTree()
    {
        $tree = new IterativeInorderTraversal();

        // Test for an empty tree
        ob_start();
        $tree->inorderIterative($tree->root);
        $output = ob_get_clean();

        // Since the tree is empty, the output should be an empty string
        $this->assertEquals("", $output);
    }

    public function testSingleNodeTree()
    {
        $tree       = new IterativeInorderTraversal();
        $tree->root = new TreeNode(10);

        // Test for a single node tree
        ob_start();
        $tree->inorderIterative($tree->root);
        $output = ob_get_clean();

        // The output should be just the single node value
        $this->assertEquals("10 ", $output);
    }

    public function testBalancedTree()
    {
        $tree                    = new IterativeInorderTraversal();
        $tree->root              = new TreeNode(1);
        $tree->root->left        = new TreeNode(2);
        $tree->root->right       = new TreeNode(3);
        $tree->root->left->left  = new TreeNode(4);
        $tree->root->left->right = new TreeNode(5);

        // Test for a balanced tree
        ob_start();
        $tree->inorderIterative($tree->root);
        $output = ob_get_clean();

        // Expected inorder traversal output: 4 2 5 1 3
        $this->assertEquals("4 2 5 1 3 ", $output);
    }

    public function testUnbalancedTree()
    {
        $tree                         = new IterativeInorderTraversal();
        $tree->root                   = new TreeNode(1);
        $tree->root->left             = new TreeNode(2);
        $tree->root->left->left       = new TreeNode(4);
        $tree->root->left->left->left = new TreeNode(8);
        $tree->root->right            = new TreeNode(3);

        // Test for an unbalanced tree
        ob_start();
        $tree->inorderIterative($tree->root);
        $output = ob_get_clean();

        // Expected inorder traversal output: 8 4 2 1 3
        $this->assertEquals("8 4 2 1 3 ", $output);
    }
}
