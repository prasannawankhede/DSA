<?php
use App\BinaryTrees\IterativePostorderTraversalOneStack;
use PHPUnit\Framework\TestCase;

class IterativePostorderTraversalOneStackTest extends TestCase
{
    public function testPostorderIterative()
    {
        $tree = new IterativePostorderTraversalOneStack();

        // Create nodes
        $tree->root                    = new \stdClass();
        $tree->root->data              = 1;
        $tree->root->left              = new \stdClass();
        $tree->root->left->data        = 2;
        $tree->root->right             = new \stdClass();
        $tree->root->right->data       = 3;
        $tree->root->left->left        = new \stdClass();
        $tree->root->left->left->data  = 4;
        $tree->root->left->right       = new \stdClass();
        $tree->root->left->right->data = 5;

        // Capture the output
        ob_start();
        $tree->postorderIterative($tree->root);
        $output = ob_get_clean();

        $expected = "4 5 2 3 1 ";
        $this->assertEquals($expected, $output);
    }
}
