<?php

namespace Tests\LinkedList;

use PHPUnit\Framework\TestCase;
use App\LinkedList\ConvertArrayToDLL;
use App\LinkedList\DLLNode;

class ConvertArrayToDLLTest extends TestCase
{
    private $converter;

    protected function setUp(): void
    {
        $this->converter = new ConvertArrayToDLL();
    }

    public function testEmptyArray()
    {
        $result = $this->converter->arrayToDLL([]);
        $this->assertNull($result);
    }

    public function testSingleElementArray()
    {
        $result = $this->converter->arrayToDLL([10]);
        $this->assertInstanceOf(DLLNode::class, $result);
        $this->assertEquals(10, $result->value);
        $this->assertNull($result->next);
        $this->assertNull($result->prev);
    }

    public function testMultipleElementsArray()
    {
        $result = $this->converter->arrayToDLL([1, 2, 3]);
        $this->assertEquals(1, $result->value);
        $this->assertEquals(2, $result->next->value);
        $this->assertEquals(3, $result->next->next->value);
        $this->assertNull($result->next->next->next);
        $this->assertEquals(2, $result->next->next->prev->value);
        $this->assertEquals(1, $result->next->prev->value);
        $this->assertNull($result->prev);
    }
}