<?php
use App\BinaryTrees\BottomViewOfBT;
use PHPUnit\Framework\TestCase;

class BottomViewOfBTTest extends TestCase
{
    public function testBottomView()
    {
        // Create the tree (no need for TreeNode class here since you're inheriting it)
        $root               = new TreeNode(1);
        $root->left         = new TreeNode(2);
        $root->right        = new TreeNode(3);
        $root->left->left   = new TreeNode(4);
        $root->left->right  = new TreeNode(5);
        $root->right->left  = new TreeNode(6);
        $root->right->right = new TreeNode(7);

        $bottomView = new BottomViewOfBT();
        $result     = $bottomView->bottomView($root);

        // Bottom view should be [4, 2, 6, 3, 7]
        $expected = [4, 2, 6, 3, 7];
        $this->assertEquals($expected, $result);
    }

    public function testSingleElement()
    {
        $root       = new TreeNode(10);
        $bottomView = new BottomViewOfBT();
        $result     = $bottomView->bottomView($root);

        // Single node tree, expected [10]
        $expected = [10];
        $this->assertEquals($expected, $result);
    }

    public function testEmptyTree()
    {
        $bottomView = new BottomViewOfBT();
        $result     = $bottomView->bottomView(null);

        // Empty tree, expected []
        $this->assertEquals([], $result);
    }
}
