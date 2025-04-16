<?php
use App\BinaryTrees\BoundaryTraversal;
use PHPUnit\Framework\TestCase;

class TreeNode
{
    public $data;
    public $left;
    public $right;

    public function __construct($data)
    {
        $this->data  = $data;
        $this->left  = null;
        $this->right = null;
    }
}

class BoundaryTraversalTest extends TestCase
{
    public function testBoundaryTraversal()
    {
        $tree = new BoundaryTraversal();

        // Constructing:
        //         1
        //       /   \
        //      2     3
        //     / \   / \
        //    4  5  6  7

        $root               = new TreeNode(1);
        $root->left         = new TreeNode(2);
        $root->right        = new TreeNode(3);
        $root->left->left   = new TreeNode(4);
        $root->left->right  = new TreeNode(5);
        $root->right->left  = new TreeNode(6);
        $root->right->right = new TreeNode(7);

        $expected = [1, 2, 4, 5, 6, 7, 3];
        $this->assertEquals($expected, $tree->boundary($root));
    }

    public function testSingleNodeTree()
    {
        $tree = new BoundaryTraversal();

        $root     = new TreeNode(1);
        $expected = [1];
        $this->assertEquals($expected, $tree->boundary($root));
    }

    public function testEmptyTree()
    {
        $tree = new BoundaryTraversal();

        $this->assertEquals([], $tree->boundary(null));
    }
}
