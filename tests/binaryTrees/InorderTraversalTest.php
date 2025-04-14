<?php
use App\BinaryTrees\InorderTraversal;
use App\BinaryTrees\TreeNode;
use PHPUnit\Framework\TestCase;

class InorderTraversalTest extends TestCase
{
    public function testEmptyTree()
    {
        $tree = new InorderTraversal();

        ob_start();
        $tree->printInOrder($tree->root);
        $output = ob_get_clean();

        $this->assertEquals("", $output);
    }

    public function testSingleNodeTree()
    {
        $tree       = new InorderTraversal();
        $tree->root = new TreeNode(10);

        ob_start();
        $tree->printInOrder($tree->root);
        $output = ob_get_clean();

        $this->assertEquals("10 ", $output);
    }

    public function testBalancedTree()
    {
        $tree                    = new InorderTraversal();
        $tree->root              = new TreeNode(1);
        $tree->root->left        = new TreeNode(2);
        $tree->root->right       = new TreeNode(3);
        $tree->root->left->left  = new TreeNode(4);
        $tree->root->left->right = new TreeNode(5);

        ob_start();
        $tree->printInOrder($tree->root);
        $output = ob_get_clean();

        $this->assertEquals("4 2 5 1 3 ", $output);
    }

    public function testLeftSkewedTree()
    {
        $tree                         = new InorderTraversal();
        $tree->root                   = new TreeNode(1);
        $tree->root->left             = new TreeNode(2);
        $tree->root->left->left       = new TreeNode(3);
        $tree->root->left->left->left = new TreeNode(4);

        ob_start();
        $tree->printInOrder($tree->root);
        $output = ob_get_clean();

        $this->assertEquals("4 3 2 1 ", $output);
    }

    public function testRightSkewedTree()
    {
        $tree                            = new InorderTraversal();
        $tree->root                      = new TreeNode(1);
        $tree->root->right               = new TreeNode(2);
        $tree->root->right->right        = new TreeNode(3);
        $tree->root->right->right->right = new TreeNode(4);

        ob_start();
        $tree->printInOrder($tree->root);
        $output = ob_get_clean();

        $this->assertEquals("1 2 3 4 ", $output);
    }
}
