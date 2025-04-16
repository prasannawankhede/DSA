<?php
use App\BinaryTrees\TopViewOfBT;
use App\BinaryTrees\TreeNode;
use PHPUnit\Framework\TestCase;

class TopViewOfBTTest extends TestCase
{
    public function testTopView()
    {
        // Construct a sample tree:
        //          1
        //         / \
        //        2   3
        //       / \   / \
        //      4   5  6  7
        //
        $root               = new TreeNode(1);
        $root->left         = new TreeNode(2);
        $root->right        = new TreeNode(3);
        $root->left->left   = new TreeNode(4);
        $root->left->right  = new TreeNode(5);
        $root->right->left  = new TreeNode(6);
        $root->right->right = new TreeNode(7);

        $topView = new TopViewOfBT();
        $result  = $topView->topView($root);

        // The top view of the tree should be [4, 2, 1, 3, 7]
        $expected = [4, 2, 1, 3, 7];
        $this->assertEquals($expected, $result);
    }

    public function testSingleElement()
    {
        $root    = new TreeNode(10);
        $topView = new TopViewOfBT();
        $result  = $topView->topView($root);

        // Single node, so the top view is just that node [10]
        $expected = [10];
        $this->assertEquals($expected, $result);
    }

    public function testEmptyTree()
    {
        $topView = new TopViewOfBT();
        $result  = $topView->topView(null);

        // Empty tree, so the top view should be an empty array
        $this->assertEquals([], $result);
    }
}
