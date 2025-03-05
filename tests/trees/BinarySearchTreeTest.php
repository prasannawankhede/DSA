<?php
namespace Tests\Trees;

use App\Trees\BinarySearchTreeImplementation;
use PHPUnit\Framework\TestCase;

class BinarySearchTreeTest extends TestCase
{
    private $bst;

    protected function setUp(): void
    {
        $this->bst = new BinarySearchTreeImplementation();
    }

    public function testTreeIsEmpty()
    {
        $this->assertTrue($this->bst->isEmpty(), 'Tree should be empty at initialization');
    }

    public function testInsertRootNode()
    {
        $this->bst->insert(10);
        $this->assertFalse($this->bst->isEmpty(), 'Tree should not be empty after inserting a node');
        $this->assertTrue($this->bst->search($this->bst->root, 10), 'Root node should be found');
    }

    public function testInsertLeftNode()
    {
        $this->bst->insert(10);
        $this->bst->insert(5);
        $this->assertTrue($this->bst->search($this->bst->root, 5), 'Left node should be found');
    }

    public function testInsertRightNode()
    {
        $this->bst->insert(10);
        $this->bst->insert(15);
        $this->assertTrue($this->bst->search($this->bst->root, 15), 'Right node should be found');
    }

    public function testSearchNonExistingNode()
    {
        $this->bst->insert(10);
        $this->assertFalse($this->bst->search($this->bst->root, 20), 'Non-existing node should not be found');
    }

    public function testPreOrderTraversal()
    {
        $this->bst->insert(10);
        $this->bst->insert(5);
        $this->bst->insert(15);
        $this->bst->insert(3);
        $this->bst->insert(7);
        $this->expectOutputString("1053157");
        $this->bst->preOrder($this->bst->root);
    }

    public function testInOrderTraversal()
    {
        $this->bst->insert(10);
        $this->bst->insert(5);
        $this->bst->insert(15);
        $this->bst->insert(3);
        $this->bst->insert(7);
        $this->expectOutputString("3571015");
        $this->bst->inOrder($this->bst->root);
    }

    public function testPostOrderTraversal()
    {
        $this->bst->insert(10);
        $this->bst->insert(5);
        $this->bst->insert(15);
        $this->bst->insert(3);
        $this->bst->insert(7);
        $this->expectOutputString("3751510");
        $this->bst->postOrder($this->bst->root);
    }
}
