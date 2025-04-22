<?php
use App\BinarySearchTrees\BinarySearchTreeChecker;
use App\BinarySearchTrees\TreeNode;
use PHPUnit\Framework\TestCase;

class BinarySearchTreeCheckerTest extends TestCase
{
    public function testValidBST()
    {
        $root        = new TreeNode(10);
        $root->left  = new TreeNode(5);
        $root->right = new TreeNode(15);

        $checker = new BinarySearchTreeChecker();
        $this->assertTrue($checker->isBst($root));
    }

    public function testInvalidBST()
    {
        $root        = new TreeNode(10);
        $root->left  = new TreeNode(5);
        $root->right = new TreeNode(8); // Invalid because 8 < 10's right child must be > 10.

        $checker = new BinarySearchTreeChecker();
        $this->assertFalse($checker->isBst($root));
    }
}
