<?php
namespace App\LinkedList;

use App\LinkedList\LLNode;
use App\LinkedList\PrintList;
use PHPUnit\Framework\TestCase;

class PrintListTest extends TestCase
{
    private function makeList(array $arr)
    {
        if (empty($arr)) {
            return null;
        }

        $head = new LLNode(array_shift($arr));
        $current = $head;

        foreach ($arr as $a) {
            $current->next = new LLNode($a);
            $current = $current->next;
        }

        return $head;
    }

    public function testPrint()
    {
        $obj = new PrintList();
        $head = $this->makeList([1, 2, 3, 4]);

        $this->assertEquals("1->2->3->4->", $obj->printList($head));
    }

    public function testPrintEmptyList()
    {
        $obj = new PrintList();
        $this->assertNull($obj->printList(null));
    }

    public function testPrintSingleNode()
    {
        $obj = new PrintList();
        $head = new LLNode(5);

        $this->assertEquals("5->", $obj->printList($head));
    }
}
