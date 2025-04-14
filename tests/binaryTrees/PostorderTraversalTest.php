<?php
use App\BinaryTrees\PostorderTraversal;
use App\BinaryTrees\TreeNode;
use PHPUnit\Framework\TestCase;

class PostorderTraversalTest extends TestCase
{
    public function testEmptyTree()
    {
        $tree = new PostorderTraversal();

        ob_start();
        $tree->postPrint($tree->root);
        $output = ob_get_clean();

        $this->assertEquals("", $output);
    }

    public function testSingleNodeTree()
    {
        $tree       = new PostorderTraversal();
        $tree->root = new TreeNode(10);

        ob_start();
        $tree->postPrint($tree->root);
        $output = ob_get_clean();

        $this->assertEquals("10 ", $output);
    }

    public function testBalancedTree()
    {
        $tree                    = new PostorderTraversal();
        $tree->root              = new TreeNode(1);
        $tree->root->left        = new TreeNode(2);
        $tree->root->right       = new TreeNode(3);
        $tree->root->left->left  = new TreeNode(4);
        $tree->root->left->right = new TreeNode(5);

        ob_start();
        $tree->postPrint($tree->root);
        $output = ob_get_clean();

        $this->assertEquals("4 5 2 3 1 ", $output);
    }

    public function testLeftSkewedTree()
    {
        $tree                         = new PostorderTraversal();
        $tree->root                   = new TreeNode(1);
        $tree->root->left             = new TreeNode(2);
        $tree->root->left->left       = new TreeNode(3);
        $tree->root->left->left->left = new TreeNode(4);

        ob_start();
        $tree->postPrint($tree->root);
        $output = ob_get_clean();

        $this->assertEquals("4 3 2 1 ", $output);
    }

    public function testRightSkewedTree()
    {
        $tree                            = new PostorderTraversal();
        $tree->root                      = new TreeNode(1);
        $tree->root->right               = new TreeNode(2);
        $tree->root->right->right        = new TreeNode(3);
        $tree->root->right->right->right = new TreeNode(4);

        ob_start();
        $tree->postPrint($tree->root);
        $output = ob_get_clean();

        $this->assertEquals("4 3 2 1 ", $output);
    }
}
