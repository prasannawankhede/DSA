<?php

use App\BinaryTrees\IterativePostorderTraversal;
use App\BinaryTrees\TreeNode;
use PHPUnit\Framework\TestCase;

class IterativePostorderTraversalTest extends TestCase
{
    public function testEmptyTree()
    {
        $tree = new IterativePostorderTraversal();

        ob_start();
        $tree->postorderIterative($tree->root);
        $output = ob_get_clean();

        // Output should be empty since the tree is empty
        $this->assertEquals("", $output);
    }

    public function testSingleNodeTree()
    {
        $tree       = new IterativePostorderTraversal();
        $tree->root = new TreeNode(10);

        ob_start();
        $tree->postorderIterative($tree->root);
        $output = ob_get_clean();

        // Output should be the single node value
        $this->assertEquals("10 ", $output);
    }

    public function testBalancedTree()
    {
        $tree                    = new IterativePostorderTraversal();
        $tree->root              = new TreeNode(1);
        $tree->root->left        = new TreeNode(2);
        $tree->root->right       = new TreeNode(3);
        $tree->root->left->left  = new TreeNode(4);
        $tree->root->left->right = new TreeNode(5);

        ob_start();
        $tree->postorderIterative($tree->root);
        $output = ob_get_clean();

        // Expected postorder output: 4 5 2 3 1
        $this->assertEquals("4 5 2 3 1 ", $output);
    }

    public function testUnbalancedTree()
    {
        $tree                         = new IterativePostorderTraversal();
        $tree->root                   = new TreeNode(1);
        $tree->root->left             = new TreeNode(2);
        $tree->root->left->left       = new TreeNode(4);
        $tree->root->left->left->left = new TreeNode(8);
        $tree->root->right            = new TreeNode(3);

        ob_start();
        $tree->postorderIterative($tree->root);
        $output = ob_get_clean();

        // Expected postorder output: 8 4 2 3 1
        $this->assertEquals("8 4 2 3 1 ", $output);
    }
}
