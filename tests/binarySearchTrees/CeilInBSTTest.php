<?php
namespace Tests\BinarySearchTrees;

use App\BinarySearchTrees\CeilInBST;
use App\BinarySearchTrees\TreeNode;
use PHPUnit\Framework\TestCase;

class CeilInBSTTest extends TestCase
{
    public function testCeil()
    {
        $root               = new TreeNode(8);
        $root->left         = new TreeNode(3);
        $root->right        = new TreeNode(10);
        $root->left->left   = new TreeNode(1);
        $root->left->right  = new TreeNode(6);
        $root->right->right = new TreeNode(14);

        $ceilFinder = new CeilInBST();

        $this->assertEquals(8, $ceilFinder->ceil($root, 7));   // Closest >= 7 is 8
        $this->assertEquals(10, $ceilFinder->ceil($root, 9));  // Closest >= 9 is 10
        $this->assertEquals(1, $ceilFinder->ceil($root, 1));   // Exact match
        $this->assertEquals(14, $ceilFinder->ceil($root, 13)); // Closest >= 13 is 14
        $this->assertNull($ceilFinder->ceil(null, 5));         // Empty tree should return null
    }
}
