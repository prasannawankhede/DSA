<?php
namespace Tests\Recursions;

use PHPUnit\Framework\TestCase;
use App\Recursions\FactorialOfNumbers;

class FactorialOfNumbersTest extends TestCase
{
    private FactorialOfNumbers $factorial;

    protected function setUp(): void
    {
        $this->factorial = new FactorialOfNumbers();
    }

    public function testFactorialOfZero()
    {
        $this->assertEquals(1, $this->factorial->factorial(0));
    }

    public function testFactorialOfOne()
    {
        $this->assertEquals(1, $this->factorial->factorial(1));
    }

    public function testFactorialOfPositiveNumber()
    {
        $this->assertEquals(120, $this->factorial->factorial(5)); // 5! = 120
        $this->assertEquals(720, $this->factorial->factorial(6)); // 6! = 720
        $this->assertEquals(5040, $this->factorial->factorial(7)); // 7! = 5040
    }

    public function testFactorialOfNegativeNumber()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->factorial->factorial(-5);
    }
}
