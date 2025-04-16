<?php
use App\BinaryTrees\LeftViewOfBT;
use PHPUnit\Framework\TestCase;

class LeftViewOfBTTest extends TestCase
{
    public function testLeftView()
    {
        // Creating the tree:
        //         1
        //       /   \
        //      2     3
        //     / \   / \
        //    4   5 6   7
        $root               = new TreeNode(1);
        $root->left         = new TreeNode(2);
        $root->right        = new TreeNode(3);
        $root->left->left   = new TreeNode(4);
        $root->left->right  = new TreeNode(5);
        $root->right->left  = new TreeNode(6);
        $root->right->right = new TreeNode(7);

        $leftView = new LeftViewOfBT();
        $leftView->view($root);

        $expected = [1, 2, 4]; // Expected left view
        $this->assertEquals($expected, $leftView->getResult());
    }

    public function testSingleNode()
    {
        // Test for a tree with a single node
        $root = new TreeNode(10);

        $leftView = new LeftViewOfBT();
        $leftView->view($root);

        $expected = [10];
        $this->assertEquals($expected, $leftView->getResult());
    }

    public function testEmptyTree()
    {
        // Test for an empty tree
        $leftView = new LeftViewOfBT();
        $leftView->view(null);

        $expected = [];
        $this->assertEquals($expected, $leftView->getResult());
    }
}
