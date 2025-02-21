<?php
namespace Tests\LinkedList;

use App\LinkedList\RemoveFromIndexLL;
use App\LinkedList\LLNode;
use PHPUnit\Framework\TestCase;

class RemoveFromIndexLLTest extends TestCase
{
    private function createLinkedList(array $values)
    {
        $list = new RemoveFromIndexLL();

        foreach ($values as $value) {
            $node = new LLNode($value);

            if ($list->head === null) {
                $list->head = $node;
            } else {
                $current = $list->head;
                while ($current->next !== null) {
                    $current = $current->next;
                }
                $current->next = $node;
            }
            $list->size++;
        }

        return $list;
    }

    public function testRemoveFromStart()
    {
        $list = $this->createLinkedList([10, 20, 30]);
        $removedValue = $list->removeIndex(0);

        $this->assertEquals(10, $removedValue, "Removing first element should return 10");
        $this->assertEquals(2, $list->getSize(), "Size should be 2 after removal");
        $this->assertEquals(20, $list->head->value, "New head should be 20");
    }

    public function testRemoveFromMiddle()
    {
        $list = $this->createLinkedList([10, 20, 30, 40]);
        $removedValue = $list->removeIndex(2);

        $this->assertEquals(30, $removedValue, "Removing index 2 should return 30");
        $this->assertEquals(3, $list->getSize(), "Size should be 3 after removal");

        // Verify list structure
        $this->assertEquals(10, $list->head->value);
        $this->assertEquals(20, $list->head->next->value);
        $this->assertEquals(40, $list->head->next->next->value);
    }

    public function testRemoveFromEnd()
    {
        $list = $this->createLinkedList([10, 20, 30]);
        $removedValue = $list->removeIndex(2);

        $this->assertEquals(30, $removedValue, "Removing last element should return 30");
        $this->assertEquals(2, $list->getSize(), "Size should be 2 after removal");

        // Ensure last element is now 20
        $this->assertNull($list->head->next->next, "Tail should now be null");
    }

    public function testRemoveInvalidIndex()
    {
        $list = $this->createLinkedList([10, 20, 30]);

        $this->assertNull($list->removeIndex(-1), "Negative index should return null");
        $this->assertNull($list->removeIndex(5), "Out-of-bounds index should return null");
    }

    public function testRemoveFromSingleElementList()
    {
        $list = $this->createLinkedList([10]);
        $removedValue = $list->removeIndex(0);

        $this->assertEquals(10, $removedValue, "Removing only element should return 10");
        $this->assertEquals(0, $list->getSize(), "Size should be 0 after removal");
        $this->assertNull($list->head, "Head should be null after removal");
    }
}
