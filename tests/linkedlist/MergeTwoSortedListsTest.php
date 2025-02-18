<?php
namespace Tests\LinkedList;

use App\LinkedList\LLNode;
use App\LinkedList\MergeTwoSortedLists;
use PHPUnit\Framework\TestCase;

class MergeTwoSortedListsTest extends TestCase
{
    /**
     * Helper function: Convert a linked list to an array.
     *
     * @param LLNode|null $node
     * @return array
     */
    private function listToArray($node): array
    {
        $arr = [];
        while ($node !== null) {
            $arr[] = $node->value;
            $node  = $node->next;
        }
        return $arr;
    }

    /**
     * Helper function: Build a linked list from an array.
     *
     * @param array $values
     * @return LLNode|null
     */
    private function buildList(array $values)
    {
        if (empty($values)) {
            return null;
        }
        $head    = new LLNode(array_shift($values));
        $current = $head;
        foreach ($values as $value) {
            $current->next = new LLNode($value);
            $current       = $current->next;
        }
        return $head;
    }

    /**
     * Test merging two non-empty sorted lists.
     */
    public function testMergeBothNonEmpty(): void
    {
        $list1 = $this->buildList([1, 3, 5]);
        $list2 = $this->buildList([2, 4, 6]);

        $merger = new MergeTwoSortedLists();
        $merged = $merger->merge($list1, $list2);

        $this->assertEquals([1, 2, 3, 4, 5, 6], $this->listToArray($merged));
    }

    /**
     * Test merging when the first list is empty.
     */
    public function testMergeFirstEmpty(): void
    {
        $list1 = $this->buildList([]);
        $list2 = $this->buildList([2, 4, 6]);

        $merger = new MergeTwoSortedLists();
        $merged = $merger->merge($list1, $list2);

        $this->assertEquals([2, 4, 6], $this->listToArray($merged));
    }

    /**
     * Test merging when the second list is empty.
     */
    public function testMergeSecondEmpty(): void
    {
        $list1 = $this->buildList([1, 3, 5]);
        $list2 = $this->buildList([]);

        $merger = new MergeTwoSortedLists();
        $merged = $merger->merge($list1, $list2);

        $this->assertEquals([1, 3, 5], $this->listToArray($merged));
    }

    /**
     * Test merging when both lists are empty.
     */
    public function testMergeBothEmpty(): void
    {
        $list1 = $this->buildList([]);
        $list2 = $this->buildList([]);

        $merger = new MergeTwoSortedLists();
        $merged = $merger->merge($list1, $list2);

        $this->assertEquals([], $this->listToArray($merged));
    }

    /**
     * Test merging lists with duplicate values.
     */
    public function testMergeWithDuplicates(): void
    {
        $list1 = $this->buildList([1, 3, 5]);
        $list2 = $this->buildList([1, 2, 3, 4]);

        $merger = new MergeTwoSortedLists();
        $merged = $merger->merge($list1, $list2);

        // Expected merged list: [1, 1, 2, 3, 3, 4, 5]
        $this->assertEquals([1, 1, 2, 3, 3, 4, 5], $this->listToArray($merged));
    }
}
