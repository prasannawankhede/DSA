<?php

use App\Queueobject;
use PHPUnit\Framework\TestCase;

class QueueObjectTest extends TestCase
{
    public function testEnqueueAndSize()
    {
        $queue = new QueueObject();

        $obj1 = (object) ['id' => 1, 'name' => 'Alice'];
        $obj2 = (object) ['id' => 2, 'name' => 'Bob'];

        $queue->enqueue($obj1);
        $queue->enqueue($obj2);

        $this->assertEquals(2, $queue->size());
    }

    public function testDequeue()
    {
        $queue = new QueueObject();

        $obj1 = (object) ['id' => 1, 'name' => 'Alice'];
        $obj2 = (object) ['id' => 2, 'name' => 'Bob'];

        $queue->enqueue($obj1);
        $queue->enqueue($obj2);

        $this->assertSame($obj1, $queue->dequeue());
        $this->assertSame($obj2, $queue->dequeue());
    }

    public function testPeek()
    {
        $queue = new QueueObject();

        $obj1 = (object) ['id' => 1, 'name' => 'Alice'];
        $obj2 = (object) ['id' => 2, 'name' => 'Bob'];

        $queue->enqueue($obj1);
        $queue->enqueue($obj2);

        $this->assertSame($obj1, $queue->peek());
    }

    public function testIsEmpty()
    {
        $queue = new QueueObject();

        $this->assertTrue($queue->isEmpty());

        $obj = (object) ['id' => 1, 'name' => 'Alice'];
        $queue->enqueue($obj);

        $this->assertFalse($queue->isEmpty());
    }

    public function testUnderflowExceptionOnDequeue()
    {
        $this->expectException(\UnderflowException::class);

        $queue = new QueueObject();
        $queue->dequeue();
    }

    public function testUnderflowExceptionOnPeek()
    {
        $this->expectException(\UnderflowException::class);

        $queue = new QueueObject();
        $queue->peek();
    }
    public function testPrint()
    {
        $queue = new QueueObject();

        // Enqueue objects
        $obj1 = (object) ['id' => 1, 'name' => 'Alice'];
        $obj2 = (object) ['id' => 2, 'name' => 'Bob'];
        $queue->enqueue($obj1);
        $queue->enqueue($obj2);

        // Capture the output
        $this->expectOutputString(
            str_replace("\r\n", "\n", 'Array
(
    [0] => stdClass Object
        (
            [id] => 1
            [name] => Alice
        )

    [1] => stdClass Object
        (
            [id] => 2
            [name] => Bob
        )

)
')
        );

        // Call the print method
        $queue->print();
    }

}
