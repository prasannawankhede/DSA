<?php
use App\BinaryTrees\RightViewOfBT;
use PHPUnit\Framework\TestCase;

class RightViewOfBTTest extends TestCase
{
    public function testRightView()
    {
        // Creating the tree:
        //         1
        //       /   \
        //      2     3
        //     /       \
        //    4         5
        //                 \
        //                  6
        $root                      = new TreeNode(1);
        $root->left                = new TreeNode(2);
        $root->right               = new TreeNode(3);
        $root->left->left          = new TreeNode(4);
        $root->right->right        = new TreeNode(5);
        $root->right->right->right = new TreeNode(6);

        $rightView = new RightViewOfBT();
        $rightView->view($root);

        $expected = [1, 3, 5, 6];
        $this->assertEquals($expected, $rightView->getRightView());
    }

    public function testSingleNode()
    {
        // Test for a tree with a single node
        $root = new TreeNode(10);

        $rightView = new RightViewOfBT();
        $rightView->view($root);

        $expected = [10];
        $this->assertEquals($expected, $rightView->getRightView());
    }

    public function testEmptyTree()
    {
        // Test for an empty tree
        $rightView = new RightViewOfBT();
        $rightView->view(null);

        $expected = [];
        $this->assertEquals($expected, $rightView->getRightView());
    }
}
