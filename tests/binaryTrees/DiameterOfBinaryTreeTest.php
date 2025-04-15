<?php
use App\BinaryTrees\DiameterOfBinaryTree;
use App\BinaryTrees\TreeNode;
use PHPUnit\Framework\TestCase;

class DiameterOfBinaryTreeTest extends TestCase
{
    public function testDiameterOfBalancedTree()
    {
        $root              = new TreeNode(1);
        $root->left        = new TreeNode(2);
        $root->right       = new TreeNode(3);
        $root->left->left  = new TreeNode(4);
        $root->left->right = new TreeNode(5);

        $diameter = 0;
        $obj      = new DiameterOfBinaryTree();
        $obj->findDiameter($root, $diameter);

        $this->assertEquals(3, $diameter); // path: 4-2-5 or 4-2-1-3 (both are 3 edges)
    }

    public function testDiameterOfSingleNode()
    {
        $root = new TreeNode(1);

        $diameter = 0;
        $obj      = new DiameterOfBinaryTree();
        $obj->findDiameter($root, $diameter);

        $this->assertEquals(0, $diameter); // single node has 0 edges
    }

    public function testDiameterOfEmptyTree()
    {
        $diameter = 0;
        $obj      = new DiameterOfBinaryTree();
        $obj->findDiameter(null, $diameter);

        $this->assertEquals(0, $diameter); // empty tree diameter is 0
    }

    public function testDiameterOfUnbalancedTree()
    {
        $root                   = new TreeNode(1);
        $root->left             = new TreeNode(2);
        $root->left->left       = new TreeNode(3);
        $root->left->left->left = new TreeNode(4);

        $diameter = 0;
        $obj      = new DiameterOfBinaryTree();
        $obj->findDiameter($root, $diameter);

        $this->assertEquals(3, $diameter); // path: 4-3-2-1 (3 edges)
    }
}
