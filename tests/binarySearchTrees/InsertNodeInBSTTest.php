<?php
namespace Tests\BinarySearchTrees;

use App\BinarySearchTrees\InsertNodeInBST;
use App\BinarySearchTrees\TreeNode;
use PHPUnit\Framework\TestCase;

class InsertNodeInBSTTest extends TestCase
{
    public function testInsert()
    {
        $root        = new TreeNode(5);
        $root->left  = new TreeNode(3);
        $root->right = new TreeNode(8);

        $inserter = new InsertNodeInBST();

        // Insert 4
        $root = $inserter->insert($root, 4);
        $this->assertEquals(4, $root->left->right->data);

        // Insert 10
        $root = $inserter->insert($root, 10);
        $this->assertEquals(10, $root->right->right->data);

        // Insert 1
        $root = $inserter->insert($root, 1);
        $this->assertEquals(1, $root->left->left->data);
    }
}
