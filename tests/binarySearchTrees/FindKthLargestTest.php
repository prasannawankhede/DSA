<?php
use App\BinarySearchTrees\FindKthLargest;
use App\BinarySearchTrees\TreeNode;
use PHPUnit\Framework\TestCase;

class FindKthLargestTest extends TestCase
{
    private function createSampleBST()
    {
        $root               = new TreeNode(10);
        $root->left         = new TreeNode(5);
        $root->right        = new TreeNode(13);
        $root->left->left   = new TreeNode(3);
        $root->left->right  = new TreeNode(6);
        $root->right->left  = new TreeNode(11);
        $root->right->right = new TreeNode(14);

        return $root;
    }

    public function testFindLargest()
    {
        $bst  = new FindKthLargest();
        $root = $this->createSampleBST();

        $this->assertEquals(14, $bst->findLargest($root, 1)); // 1st largest
        $this->assertEquals(13, $bst->findLargest($root, 2)); // 2nd largest
        $this->assertEquals(11, $bst->findLargest($root, 3)); // 3rd largest
        $this->assertEquals(10, $bst->findLargest($root, 4)); // 4th largest
        $this->assertEquals(6, $bst->findLargest($root, 5));  // 5th largest
        $this->assertEquals(5, $bst->findLargest($root, 6));  // 6th largest
        $this->assertEquals(3, $bst->findLargest($root, 7));  // 7th largest
    }
}
