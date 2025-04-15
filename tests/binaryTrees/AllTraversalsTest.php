<?php
use App\BinaryTrees\AllTraversals;
use PHPUnit\Framework\TestCase;

class Node
{
    public $data;
    public $left;
    public $right;

    public function __construct($data)
    {
        $this->data  = $data;
        $this->left  = null;
        $this->right = null;
    }
}

class AllTraversalsTest extends TestCase
{
    public function testAllInOneTraversal()
    {
        // Create the tree
        $root              = new Node(1);
        $root->left        = new Node(2);
        $root->right       = new Node(3);
        $root->left->left  = new Node(4);
        $root->left->right = new Node(5);

        $traversal = new AllTraversals();

        // Capture output
        ob_start();
        $traversal->allInOneTraversal($root);
        $output = ob_get_clean();

        // Expected traversal order strings
        $expected = "Preorder: 1 2 4 5 3" . PHP_EOL;
        $expected .= "Inorder: 4 2 5 1 3" . PHP_EOL;
        $expected .= "Postorder: 4 5 2 3 1" . PHP_EOL;

        $this->assertEquals($expected, $output);
    }
}
