<?php
namespace App\BinaryTrees;

class RootToNodePath
{
    public function findPath($root, $node, &$result)
    {

        if ($root === null) {
            return false;
        }

        $result[] = $root->data;

        if ($root->data === $node) {
            return true;
        }

        if ($this->findPath($root->left, $node, $result) || $this->findPath($root->right, $node, $result)) {
            return true;
        }
        array_pop($result);
        return false;

    }
}
