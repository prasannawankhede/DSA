<?php
use App\BinaryTrees\TreeNode;
use App\BinaryTrees\VerticalOrderTraversal;
use PHPUnit\Framework\TestCase;

class VerticalOrderTraversalTest extends TestCase
{
    public function testVerticalOrder()
    {
        $root               = new TreeNode(1);
        $root->left         = new TreeNode(2);
        $root->right        = new TreeNode(3);
        $root->left->left   = new TreeNode(4);
        $root->left->right  = new TreeNode(5);
        $root->right->left  = new TreeNode(6);
        $root->right->right = new TreeNode(7);

        $traversal = new VerticalOrderTraversal();
        $result    = $traversal->verticalOrder($root);

        $expected = [4, 2, 1, 5, 6, 3, 7];
        $this->assertEquals($expected, $result);
    }

    public function testSingleElement()
    {
        $root      = new TreeNode(10);
        $traversal = new VerticalOrderTraversal();
        $result    = $traversal->verticalOrder($root);

        $expected = [10];
        $this->assertEquals($expected, $result);
    }

    public function testEmptyTree()
    {
        $traversal = new VerticalOrderTraversal();
        $result    = $traversal->verticalOrder(null);

        $this->assertEquals([], $result);
    }
}
