<?php
namespace App\BinarySearchTrees;

class findKthSmallest
{
    public function findSmallest($root, $k)
    {
        $counter   = 0;
        $kSmallest = 0;

        $this->inorder($root, $counter, $k, $kSmallest);
        return $kSmallest;
    }

    public function inorder($root, &$counter, $k, &$kSmallest)
    {
        if ($root === null || $counter > $k) {
            return;
        }

        $this->inorder($root->left, $counter, $k, $kSmallest);
        $counter++;

        if ($counter === $k) {
            $kSmallest = $root->data;
            return $kSmallest;
        }

        $this->inorder($root->right, $counter, $k, $kSmallest);

    }
}
