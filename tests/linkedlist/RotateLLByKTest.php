<?php
use PHPUnit\Framework\TestCase;
use App\LinkedList\RotateLLByK;
use App\LinkedList\Node;

class RotateLLByKTest extends TestCase
{
    private RotateLLByK $rotateLLByK;

    protected function setUp(): void
    {
        $this->rotateLLByK = new RotateLLByK();
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

    public function testRotateByKLessThanLength(): void
    {
        $head = $this->createLinkedList([1, 2, 3, 4, 5]);
        $rotatedHead = $this->rotateLLByK->rotate($head, 2);
        $this->assertEquals([4, 5, 1, 2, 3], $this->linkedListToArray($rotatedHead));
    }

    public function testRotateByKEqualToLength(): void
    {
        $head = $this->createLinkedList([1, 2, 3, 4, 5]);
        $rotatedHead = $this->rotateLLByK->rotate($head, 5);
        $this->assertEquals([1, 2, 3, 4, 5], $this->linkedListToArray($rotatedHead));
    }

    public function testRotateByKGreaterThanLength(): void
    {
        $head = $this->createLinkedList([1, 2, 3, 4, 5]);
        $rotatedHead = $this->rotateLLByK->rotate($head, 7);
        $this->assertEquals([4, 5, 1, 2, 3], $this->linkedListToArray($rotatedHead));
    }

    public function testRotateSingleElement(): void
    {
        $head = $this->createLinkedList([10]);
        $rotatedHead = $this->rotateLLByK->rotate($head, 3);
        $this->assertEquals([10], $this->linkedListToArray($rotatedHead));
    }

    public function testRotateEmptyList(): void
    {
        $head = null;
        $rotatedHead = $this->rotateLLByK->rotate($head, 2);
        $this->assertNull($rotatedHead);
    }
}
