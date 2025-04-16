<?php
use App\BinaryTrees\TreeNode;
use App\BinaryTrees\ZigZagTraversal;
use PHPUnit\Framework\TestCase;

class ZigZagTraversalTest extends TestCase
{
    public function testZigZagTraversal()
    {
        $tree = new ZigZagTraversal();

        // Build Tree:
        //         1
        //       /   \
        //     2       3
        //    / \     / \
        //   4   5   6   7
        $root               = new TreeNode(1);
        $root->left         = new TreeNode(2);
        $root->right        = new TreeNode(3);
        $root->left->left   = new TreeNode(4);
        $root->left->right  = new TreeNode(5);
        $root->right->left  = new TreeNode(6);
        $root->right->right = new TreeNode(7);

        $expected = [1, 3, 2, 4, 5, 6, 7];

        $this->assertEquals($expected, $tree->zigZag($root));
    }

    public function testEmptyTree()
    {
        $tree = new ZigZagTraversal();

        $this->assertEquals([], $tree->zigZag(null));
    }

    public function testSingleElementTree()
    {
        $tree = new ZigZagTraversal();

        $root     = new TreeNode(10);
        $expected = [10];

        $this->assertEquals($expected, $tree->zigZag($root));
    }
}
