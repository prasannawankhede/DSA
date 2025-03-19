<?php

use PHPUnit\Framework\TestCase;
use App\ArrayProblems\BuyAndSellStocksOptimized;

class BuyAndSellStocksOptimizedTest extends TestCase
{
    private $stocks;

    protected function setUp(): void
    {
        $this->stocks = new BuyAndSellStocksOptimized();
    }

    /**
     * @dataProvider stocksDataProvider
     */
    public function testStocks($arr, $expected)
    {
        $result = $this->stocks->stocks($arr);
        $this->assertEquals($expected, $result);
    }

    public static function stocksDataProvider(): array
    {
        return [
            [[7, 1, 5, 3, 6, 4], 5],         // Buy at 1, Sell at 6
            [[7, 6, 4, 3, 1], 0],            // No profit possible
            [[1, 2, 3, 4, 5], 4],            // Buy at 1, Sell at 5
            [[3, 3, 3, 3, 3], 0],            // All same prices, no profit
            [[2, 4, 1, 5, 3, 6, 4], 5]       // Buy at 1, Sell at 6
        ];
    }
}
