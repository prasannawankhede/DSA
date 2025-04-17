<?php
use App\BinaryTrees\LowestCommonAncestor;
use PHPUnit\Framework\TestCase;

class LowestCommonAncestorTest extends TestCase
{
    public function testLca()
    {
        $root               = new TreeNode(3);
        $root->left         = new TreeNode(5);
        $root->right        = new TreeNode(1);
        $root->left->left   = new TreeNode(6);
        $root->left->right  = new TreeNode(2);
        $root->right->left  = new TreeNode(0);
        $root->right->right = new TreeNode(8);

        $lca = new LowestCommonAncestor();

        $result1 = $lca->lca($root, 5, 1);
        $this->assertEquals(3, $result1->data);

        $result2 = $lca->lca($root, 6, 2);
        $this->assertEquals(5, $result2->data);

        $result3 = $lca->lca($root, 0, 8);
        $this->assertEquals(1, $result3->data);
    }
}
