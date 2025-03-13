<?php
use App\LinkedList\Add1TonumberRepresentedLL;
use App\LinkedList\LLNode;
use PHPUnit\Framework\TestCase;

class Add1TonumberRepresentedLLTest extends TestCase
{
    private function createLinkedList(array $values): ?LLNode
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

    private function linkedListToArray(?LLNode $head): array
    {
        $result = [];
        while ($head !== null) {
            $result[] = $head->value;
            $head     = $head->next;
        }
        return $result;
    }

    public function testAddOneToNumber()
    {
        $obj = new Add1TonumberRepresentedLL();

        // Test case 1: 129 -> 130
        $head    = $this->createLinkedList([1, 2, 9]);
        $newHead = $obj->addOne($head);
        $this->assertEquals([1, 3, 0], $this->linkedListToArray($newHead));

        // Test case 2: 999 -> 1000
        $head    = $this->createLinkedList([9, 9, 9]);
        $newHead = $obj->addOne($head);
        $this->assertEquals([1, 0, 0, 0], $this->linkedListToArray($newHead));

        // Test case 3: 0 -> 1
        $head    = $this->createLinkedList([0]);
        $newHead = $obj->addOne($head);
        $this->assertEquals([1], $this->linkedListToArray($newHead));

        // Test case 4: Empty list (null) -> 1
        // Test case 4: Empty list (null) -> null
        $head    = null;
        $newHead = $obj->addOne($head);
        $this->assertEquals([], $this->linkedListToArray($newHead));

        // Test case 5: 1 -> 2
        $head    = $this->createLinkedList([1]);
        $newHead = $obj->addOne($head);
        $this->assertEquals([2], $this->linkedListToArray($newHead));

        // Test case 6: 199 -> 200
        $head    = $this->createLinkedList([1, 9, 9]);
        $newHead = $obj->addOne($head);
        $this->assertEquals([2, 0, 0], $this->linkedListToArray($newHead));

        //test 7 for 0
        $head    = $this->createLinkedList([0]);
        $newHead = $obj->addOne($head);
        $this->assertEquals([1], $this->linkedListToArray($newHead));
    }
}
