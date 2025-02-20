<?php

use App\LinkedList\FindSizeLL;
use App\LinkedList\LLNode;
use PHPUnit\Framework\TestCase;

class FindSizeLLTest extends TestCase
{

    private function makeList(array $values)
    {

        if (empty($values)) {
            return null;
        }

        $head = new LLNode(array_shift($values));

        $current = $head;

        foreach ($values as $value) {

            $current->next = new LLNode($value);
            $current       = $current->next;
        }

        return $head;
    }

    public function testCheckSize()
    {

        $array = $this->makeList([1,2,3,4]);
        $obj = new FindSizeLL();

        $result = $obj->getSize($array);
        $this->assertEquals(4, $result);
    }

    public function testZeroSize(){
        $array = $this->makeList([]);
        $obj = new FindSizeLL();
        $result = $obj->getSize($array);
        $this->assertEquals(0,$result);
    }

    public function testToCheckSingleEmement(){

        $array = new LLNode([1]);
        $obj = new FindSizeLL();

        $result = $obj->getSize($array);

        $this->assertEquals(1,$result);
    }
}
