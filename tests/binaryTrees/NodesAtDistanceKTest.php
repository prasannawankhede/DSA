<?php

use App\BinaryTrees\NodesAtDistanceK;

class NodesAtDistanceKTest extends TreeNode
{
    public function testKDistanceNodes()
    {
        $root               = new TreeNode(1);
        $root->left         = new TreeNode(2);
        $root->right        = new TreeNode(3);
        $root->left->left   = new TreeNode(4);
        $root->left->right  = new TreeNode(5);
        $root->right->left  = new TreeNode(6);
        $root->right->right = new TreeNode(7);

        $nodesAtK = new NodesAtDistanceK();

        // Test: Distance 2 from target 2
        $expected = [4, 5, 1];
        $actual   = $nodesAtK->kDistanceNodes($root, 2, 1);
        sort($actual);
        sort($expected);
        $this->assertEquals($expected, $actual);

        // Test: Distance 2 from target 1 (root)
        $expected = [4, 5, 6, 7];
        $actual   = $nodesAtK->kDistanceNodes($root, 1, 2);
        sort($actual);
        sort($expected);
        $this->assertEquals($expected, $actual);

        // Test: Distance 0 from target 3
        $expected = [3];
        $actual   = $nodesAtK->kDistanceNodes($root, 3, 0);
        $this->assertEquals($expected, $actual); 
    }
}
