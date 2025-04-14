<?php
use App\BinaryTrees\LevelOrderTraversal;
use App\BinaryTrees\TreeNode;
use PHPUnit\Framework\TestCase;

class LevelOrderTraversalTest extends TestCase
{
    public function testEmptyTree()
    {
        $tree = new LevelOrderTraversal();

        ob_start();
        $tree->bfs($tree->root);
        $output = ob_get_clean();

        $this->assertEquals("", $output);
    }

    public function testSingleNodeTree()
    {
        $tree       = new LevelOrderTraversal();
        $tree->root = new TreeNode(10);

        ob_start();
        $tree->bfs($tree->root);
        $output = ob_get_clean();

        $this->assertEquals("10 ", $output);
    }

    public function testBalancedTree()
    {
        $tree                    = new LevelOrderTraversal();
        $tree->root              = new TreeNode(1);
        $tree->root->left        = new TreeNode(2);
        $tree->root->right       = new TreeNode(3);
        $tree->root->left->left  = new TreeNode(4);
        $tree->root->left->right = new TreeNode(5);

        ob_start();
        $tree->bfs($tree->root);
        $output = ob_get_clean();

        $this->assertEquals("1 2 3 4 5 ", $output);
    }
}
