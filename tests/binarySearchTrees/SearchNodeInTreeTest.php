<?php
namespace Tests\BinarySearchTrees;

use App\BinarySearchTrees\SearchNodeInTree;
use App\BinarySearchTrees\TreeNode;
use PHPUnit\Framework\TestCase;

class SearchNodeInTreeTest extends TestCase
{
    public function testFindNode()
    {
        $root              = new TreeNode(4);
        $root->left        = new TreeNode(2);
        $root->right       = new TreeNode(7);
        $root->left->left  = new TreeNode(1);
        $root->left->right = new TreeNode(3);

        $searcher = new SearchNodeInTree();

        $foundNode = $searcher->findNode($root, 2);
        $this->assertNotNull($foundNode);
        $this->assertEquals(2, $foundNode->data);

        $notFoundNode = $searcher->findNode($root, 5);
        $this->assertNull($notFoundNode);
    }
}
