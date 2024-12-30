<?php
use PHPUnit\Framework\TestCase;
use App\FibonacciSecquence;

class FibonacciSecquenceTest extends TestCase {
    private $fibonacci;

    // Initialize the FibonacciSecquence object once before every test
    protected function setUp(): void {
        $this->fibonacci = new FibonacciSecquence();
    }

    public function testFindWithValidInput() {
        // Test for n = 1
        $this->assertEquals([0], $this->fibonacci->find(1));

        // Test for n = 2
        $this->assertEquals([0, 1], $this->fibonacci->find(2));

        // Test for n = 5
        $this->assertEquals([0, 1, 1, 2, 3], $this->fibonacci->find(5));

        // Test for n = 10
        $this->assertEquals([0, 1, 1, 2, 3, 5, 8, 13, 21, 34], $this->fibonacci->find(10));
    }

    public function testFindWithZero() {
        // Test for n = 0
        $this->assertEquals([], $this->fibonacci->find(0));
    }

    public function testFindWithNegativeInput() {
        // Test for negative input
        $this->assertEquals([], $this->fibonacci->find(-5));
    }
}
