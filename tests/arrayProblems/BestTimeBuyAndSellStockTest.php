<?php

// namespace Tests\arrayProblems;

use PHPUnit\Framework\TestCase;
use App\arrayProblems\BestTimeBuyAndSellStock;

class BestTimeBuyAndSellStockTest extends TestCase
{
    /**
     * @var BestTimeBuyAndSellStock
     */
    private $stockObj;

    /**
     * Setup a new instance of BestTimeBuyAndSellStock before each test.
     *
     * @return void
     */
    protected function setUp(): void
    {
        $this->stockObj = new BestTimeBuyAndSellStock();
    }

    /**
     * Test that an empty array returns 0 profit.
     *
     * @return void
     */
    public function testEmptyArray(): void
    {
        $this->assertEquals(0, $this->stockObj->stock([]));
    }

    /**
     * Test that a single-element array returns 0 profit.
     *
     * @return void
     */
    public function testSingleElement(): void
    {
        $this->assertEquals(0, $this->stockObj->stock([5]));
    }

    /**
     * Test that strictly increasing prices yield maximum profit.
     *
     * For [1,2,3,4,5], the best is to buy at 1 and sell at 5: profit = 4.
     *
     * @return void
     */
    public function testIncreasingPrices(): void
    {
        $this->assertEquals(4, $this->stockObj->stock([1, 2, 3, 4, 5]));
    }

    /**
     * Test that strictly decreasing prices yield 0 profit.
     *
     * For [5,4,3,2,1], there is no profitable transaction.
     *
     * @return void
     */
    public function testDecreasingPrices(): void
    {
        $this->assertEquals(0, $this->stockObj->stock([5, 4, 3, 2, 1]));
    }

    /**
     * Test a mixed array of prices.
     *
     * For [7,1,5,3,6,4], the best is to buy at 1 and sell at 6: profit = 5.
     *
     * @return void
     */
    public function testMixedPrices(): void
    {
        $this->assertEquals(5, $this->stockObj->stock([7, 1, 5, 3, 6, 4]));
    }

    /**
     * Test that an array with equal prices returns 0 profit.
     *
     * For [3,3,3,3], no profit can be made.
     *
     * @return void
     */
    public function testEqualPrices(): void
    {
        $this->assertEquals(0, $this->stockObj->stock([3, 3, 3, 3]));
    }

    /**
     * Test a scenario where multiple profitable transactions are possible.
     *
     * For example, in [7,2,8,5,6] the best is to buy at 2 and sell at 8: profit = 6.
     *
     * @return void
     */
    public function testMultipleTransactionScenario(): void
    {
        $this->assertEquals(6, $this->stockObj->stock([7, 2, 8, 5, 6]));
    }
}
