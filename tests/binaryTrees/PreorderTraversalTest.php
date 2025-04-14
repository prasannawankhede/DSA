<?php
use App\BinaryTrees\PreorderTraversal;
use App\BinaryTrees\TreeNode;
use PHPUnit\Framework\TestCase;

class PreorderTraversalTest extends TestCase
{
    public function testEmptyTree()
    {
        $tree = new PreorderTraversal();

        ob_start();
        $tree->printTree($tree->root);
        $output = ob_get_clean();

        $this->assertEquals("", $output);
    }

    public function testSingleNodeTree()
    {
        $tree       = new PreorderTraversal();
        $tree->root = new TreeNode(10);

        ob_start();
        $tree->printTree($tree->root);
        $output = ob_get_clean();

        $this->assertEquals("10 ", $output);
    }

    public function testLeftSkewedTree()
    {
        $tree                         = new PreorderTraversal();
        $tree->root                   = new TreeNode(1);
        $tree->root->left             = new TreeNode(2);
        $tree->root->left->left       = new TreeNode(3);
        $tree->root->left->left->left = new TreeNode(4);

        ob_start();
        $tree->printTree($tree->root);
        $output = ob_get_clean();

        $this->assertEquals("1 2 3 4 ", $output);
    }

    public function testRightSkewedTree()
    {
        $tree                            = new PreorderTraversal();
        $tree->root                      = new TreeNode(1);
        $tree->root->right               = new TreeNode(2);
        $tree->root->right->right        = new TreeNode(3);
        $tree->root->right->right->right = new TreeNode(4);

        ob_start();
        $tree->printTree($tree->root);
        $output = ob_get_clean();

        $this->assertEquals("1 2 3 4 ", $output);
    }

    public function testBalancedTree()
    {
        $tree                    = new PreorderTraversal();
        $tree->root              = new TreeNode(1);
        $tree->root->left        = new TreeNode(2);
        $tree->root->right       = new TreeNode(3);
        $tree->root->left->left  = new TreeNode(4);
        $tree->root->left->right = new TreeNode(5);

        ob_start();
        $tree->printTree($tree->root);
        $output = ob_get_clean();

        $this->assertEquals("1 2 4 5 3 ", $output);
    }
}
