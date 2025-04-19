<?php
namespace Tests\BinarySearchTrees;

use App\BinarySearchTrees\MinMaxInBST;
use App\BinarySearchTrees\TreeNode;
use PHPUnit\Framework\TestCase;

class MinMaxInBSTTest extends TestCase
{
    public function testFindMinAndMax()
    {
        $root               = new TreeNode(8);
        $root->left         = new TreeNode(3);
        $root->right        = new TreeNode(10);
        $root->left->left   = new TreeNode(1);
        $root->left->right  = new TreeNode(6);
        $root->right->right = new TreeNode(14);

        $minMax = new MinMaxInBST();

        $this->assertEquals(1, $minMax->findMin($root));
        $this->assertEquals(14, $minMax->findMax($root));

        // Edge case: empty tree
        $this->assertNull($minMax->findMin(null));
        $this->assertNull($minMax->findMax(null));
    }
}
