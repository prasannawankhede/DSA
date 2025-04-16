<?php
namespace App\BinaryTrees;

class BoundaryTraversal
{
    public function boundary($root)
    {
        if ($root === null) {
            return [];
        }

        $result = [$root->data];

        // Left Boundary (excluding leaves)
        $this->addLeftBoundary($root->left, $result);

        // All Leaf Nodes
        $this->addLeaves($root->left, $result);
        $this->addLeaves($root->right, $result);

        // Right Boundary (excluding leaves)
        $rightBoundary = [];
        $this->addRightBoundary($root->right, $rightBoundary);
        $result = array_merge($result, array_reverse($rightBoundary));

        return $result;
    }

    private function addLeftBoundary($node, &$result)
    {
        while ($node !== null) {
            if (! $this->isLeaf($node)) {
                $result[] = $node->data;
            }
            $node = $node->left !== null ? $node->left : $node->right;
        }
    }

    private function addRightBoundary($node, &$rightBoundary)
    {
        while ($node !== null) {
            if (! $this->isLeaf($node)) {
                $rightBoundary[] = $node->data;
            }
            $node = $node->right !== null ? $node->right : $node->left;
        }
    }

    private function addLeaves($node, &$result)
    {
        if ($node === null) {
            return;
        }

        if ($this->isLeaf($node)) {
            $result[] = $node->data;
            return;
        }

        $this->addLeaves($node->left, $result);
        $this->addLeaves($node->right, $result);
    }

    private function isLeaf($node)
    {
        return $node->left === null && $node->right === null;
    }
}
