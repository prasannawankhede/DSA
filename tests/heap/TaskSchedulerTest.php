<?php
namespace Tests\Heap;

use App\Heap\TaskScheduler;
use PHPUnit\Framework\TestCase;

class TaskSchedulerTest extends TestCase
{
    public function testExample1()
    {
        $scheduler     = new TaskScheduler();
        $tasks         = ['A', 'A', 'A', 'B', 'B', 'B'];
        $coolingPeriod = 2;
        $this->assertEquals(8, $scheduler->leastInterval($tasks, $coolingPeriod));
    }

    public function testExample2()
    {
        $scheduler     = new TaskScheduler();
        $tasks         = ['A', 'A', 'A', 'B', 'B', 'B'];
        $coolingPeriod = 0;
        $this->assertEquals(6, $scheduler->leastInterval($tasks, $coolingPeriod));
    }

    public function testSingleTask()
    {
        $scheduler     = new TaskScheduler();
        $tasks         = ['A'];
        $coolingPeriod = 2;
        $this->assertEquals(1, $scheduler->leastInterval($tasks, $coolingPeriod));
    }

    public function testEmptyTaskList()
    {
        $scheduler     = new TaskScheduler();
        $tasks         = [];
        $coolingPeriod = 3;
        $this->assertEquals(0, $scheduler->leastInterval($tasks, $coolingPeriod));
    }
}
