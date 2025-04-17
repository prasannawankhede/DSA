<?php
use App\BinaryTrees\RootToNodePath;
use PHPUnit\Framework\TestCase;

class RootToNodePathTest extends TestCase
{
    public function testPathExists()
    {
        $root              = new TreeNode(1);
        $root->left        = new TreeNode(2);
        $root->right       = new TreeNode(3);
        $root->left->left  = new TreeNode(4);
        $root->left->right = new TreeNode(5);

        $pathFinder = new RootToNodePath();
        $result     = [];
        $pathFinder->findPath($root, 5, $result);

        $expected = [1, 2, 5];
        $this->assertEquals($expected, $result);
    }

    public function testPathNotExists()
    {
        $root        = new TreeNode(1);
        $root->left  = new TreeNode(2);
        $root->right = new TreeNode(3);

        $pathFinder = new RootToNodePath();
        $result     = [];
        $found      = $pathFinder->findPath($root, 10, $result);

        $this->assertFalse($found);
        $this->assertEquals([], $result);
    }

    public function testEmptyTree()
    {
        $pathFinder = new RootToNodePath();
        $result     = [];
        $found      = $pathFinder->findPath(null, 10, $result);

        $this->assertFalse($found);
        $this->assertEquals([], $result);
    }
}
