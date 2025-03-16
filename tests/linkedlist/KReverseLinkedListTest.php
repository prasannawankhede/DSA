<?php
use PHPUnit\Framework\TestCase;
use App\LinkedList\Node;
use App\LinkedList\KReverseLinkedList;

class KReverseLinkedListTest extends TestCase
{
    private KReverseLinkedList $kReverseLinkedList;

    protected function setUp(): void
    {
        $this->kReverseLinkedList = new KReverseLinkedList();
    }

    private function linkedListToArray(?Node $head): array
    {
        $result = [];
        while ($head !== null) {
            $result[] = $head->value;
            $head = $head->next;
        }
        return $result;
    }

    private function createLinkedList(array $values): ?Node
    {
        if (empty($values)) return null;
        $head = new Node($values[0]);
        $current = $head;
        for ($i = 1; $i < count($values); $i++) {
            $current->next = new Node($values[$i]);
            $current = $current->next;
        }
        return $head;
    }

    public function testKReverseWithValidList(): void
    {
        $head = $this->createLinkedList([1, 2, 3, 4, 5, 6, 7, 8]);
        $reversedHead = $this->kReverseLinkedList->KReverse($head, 3);

        // Expected: [3, 2, 1, 6, 5, 4, 7, 8]
        $this->assertEquals([3, 2, 1, 6, 5, 4, 7, 8], $this->linkedListToArray($reversedHead));
    }

    public function testKReverseWithEmptyList(): void
    {
        $head = null;
        $reversedHead = $this->kReverseLinkedList->KReverse($head, 3);
        $this->assertNull($reversedHead);
    }

    public function testKReverseWithKEqualToOne(): void
    {
        $head = $this->createLinkedList([1, 2, 3, 4, 5]);
        $reversedHead = $this->kReverseLinkedList->KReverse($head, 1);

        // Expected: [1, 2, 3, 4, 5] (list remains unchanged)
        $this->assertEquals([1, 2, 3, 4, 5], $this->linkedListToArray($reversedHead));
    }

    public function testKReverseWithKGreaterThanLength(): void
    {
        $head = $this->createLinkedList([1, 2, 3]);
        $reversedHead = $this->kReverseLinkedList->KReverse($head, 5);

        // Expected: [1, 2, 3] (list remains unchanged because k > length)
        $this->assertEquals([1, 2, 3], $this->linkedListToArray($reversedHead));
    }

    public function testKReverseWithKEqualToLength(): void
    {
        $head = $this->createLinkedList([1, 2, 3, 4, 5]);
        $reversedHead = $this->kReverseLinkedList->KReverse($head, 5);

        // Expected: [5, 4, 3, 2, 1] (entire list is reversed)
        $this->assertEquals([5, 4, 3, 2, 1], $this->linkedListToArray($reversedHead));
    }

    public function testKReverseWithSingleNodeList(): void
    {
        $head = $this->createLinkedList([1]);
        $reversedHead = $this->kReverseLinkedList->KReverse($head, 1);

        // Expected: [1] (list remains unchanged)
        $this->assertEquals([1], $this->linkedListToArray($reversedHead));
    }
}