<?php
namespace tests\Recursions;

use App\Recursions\KTHSymbolIngrammer;
use PHPUnit\Framework\TestCase;

class KTHSymbolIngrammerTest extends TestCase
{
    protected KTHSymbolIngrammer $solver;

    protected function setUp(): void
    {
        $this->solver = new KTHSymbolIngrammer();
    }

    public function testBaseCase()
    {
        $this->assertSame(0, $this->solver->solve(1, 1));
    }

    public function testExamples()
    {
        $this->assertSame(0, $this->solver->solve(2, 1)); // sequence: 0 1
        $this->assertSame(1, $this->solver->solve(2, 2));

        $this->assertSame(0, $this->solver->solve(3, 1)); // sequence: 0 1 1 0
        $this->assertSame(1, $this->solver->solve(3, 2));
        $this->assertSame(1, $this->solver->solve(3, 3));
        $this->assertSame(0, $this->solver->solve(3, 4));
    }

    public function testLargerInputs()
    {
        $this->assertSame(1, $this->solver->solve(4, 5));
        $this->assertSame(1, $this->solver->solve(4, 8));
        $this->assertSame(1, $this->solver->solve(10, 512));
    }

}
