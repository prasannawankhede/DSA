<?php
use App\BinarySearchTrees\findKthSmallest;
use App\BinarySearchTrees\TreeNode;
use PHPUnit\Framework\TestCase;

class FindKthSmallestTest extends TestCase
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

    public function testFindSmallest()
    {
        $bst  = new findKthSmallest();
        $root = $this->createSampleBST();

        $this->assertEquals(3, $bst->findSmallest($root, 1));  // 1st smallest
        $this->assertEquals(5, $bst->findSmallest($root, 2));  // 2nd smallest
        $this->assertEquals(6, $bst->findSmallest($root, 3));  // 3rd smallest
        $this->assertEquals(10, $bst->findSmallest($root, 4)); // 4th smallest
        $this->assertEquals(11, $bst->findSmallest($root, 5)); // 5th smallest
        $this->assertEquals(13, $bst->findSmallest($root, 6)); // 6th smallest
        $this->assertEquals(14, $bst->findSmallest($root, 7)); // 7th smallest
    }
}
