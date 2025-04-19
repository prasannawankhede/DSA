<?php
namespace Tests\BinarySearchTrees;

use App\BinarySearchTrees\FloorInBST;
use App\BinarySearchTrees\TreeNode;
use PHPUnit\Framework\TestCase;

class FloorInBSTTest extends TestCase
{
    public function testFloor()
    {
        $root               = new TreeNode(8);
        $root->left         = new TreeNode(3);
        $root->right        = new TreeNode(10);
        $root->left->left   = new TreeNode(1);
        $root->left->right  = new TreeNode(6);
        $root->right->right = new TreeNode(14);

        $floorFinder = new FloorInBST();

        $this->assertEquals(6, $floorFinder->floor($root, 7));   // Correct: Closest <= 7 is 6
        $this->assertEquals(8, $floorFinder->floor($root, 9));   // Closest <= 9 is 8
        $this->assertEquals(1, $floorFinder->floor($root, 1));   // Exact match
        $this->assertEquals(10, $floorFinder->floor($root, 13)); // Closest <= 13 is 10
        $this->assertNull($floorFinder->floor(null, 5));         // Empty tree should return null
    }
}
