<?php
use App\BinaryTrees\IdenticalTrees;
use App\BinaryTrees\TreeNode;
use PHPUnit\Framework\TestCase;

class IdenticalTreesTest extends TestCase
{
    public function testIdenticalTreesTrue()
    {
        $tree1        = new TreeNode(1);
        $tree1->left  = new TreeNode(2);
        $tree1->right = new TreeNode(3);

        $tree2        = new TreeNode(1);
        $tree2->left  = new TreeNode(2);
        $tree2->right = new TreeNode(3);

        $checker = new IdenticalTrees();
        $this->assertTrue($checker->isIdentical($tree1, $tree2));
    }

    public function testIdenticalTreesFalse_Structure()
    {
        $tree1       = new TreeNode(1);
        $tree1->left = new TreeNode(2);

        $tree2        = new TreeNode(1);
        $tree2->left  = new TreeNode(2);
        $tree2->right = new TreeNode(3);

        $checker = new IdenticalTrees();
        $this->assertFalse($checker->isIdentical($tree1, $tree2));
    }

    public function testIdenticalTreesFalse_DataMismatch()
    {
        $tree1        = new TreeNode(1);
        $tree1->left  = new TreeNode(2);
        $tree1->right = new TreeNode(4);

        $tree2        = new TreeNode(1);
        $tree2->left  = new TreeNode(2);
        $tree2->right = new TreeNode(3);

        $checker = new IdenticalTrees();
        $this->assertFalse($checker->isIdentical($tree1, $tree2));
    }

    public function testIdenticalTreesBothNull()
    {
        $checker = new IdenticalTrees();
        $this->assertTrue($checker->isIdentical(null, null));
    }
}
