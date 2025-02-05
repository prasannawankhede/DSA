<?php

use PHPUnit\Framework\TestCase;
use App\CalculateTotalSales;

class CalculateTotalSalesTest extends TestCase
{
    public function testTotalSales()
    {
        $calculator = new CalculateTotalSales();

        // Test with sample products
        $products = [
            (object) ['name' => 'Apple', 'price' => 0.5, 'quantity' => 10],
            (object) ['name' => 'Banana', 'price' => 0.3, 'quantity' => 20],
            (object) ['name' => 'Orange', 'price' => 0.6, 'quantity' => 15],
        ];

        $result = $calculator->totalSales($products);

        // Expected Total Sales: 5.4 + 6.48 + 9.72 = 21.6
        $this->assertEquals(21.6, $result, 'The total sales calculation is incorrect');
    }

    public function testEmptyProducts()
    {
        $calculator = new CalculateTotalSales();

        // Test with empty product array
        $products = [];

        $result = $calculator->totalSales($products);

        $this->assertEquals(0, $result, 'The total sales for an empty array should be 0');
    }

    public function testSingleProduct()
    {
        $calculator = new CalculateTotalSales();

        // Test with a single product
        $products = [
            (object) ['name' => 'Grapes', 'price' => 1.5, 'quantity' => 10],
        ];

        $result = $calculator->totalSales($products);

        // Expected Total Sales: (1.5 * 10) * 1.08 = 16.2
        $this->assertEquals(16.2, $result, 'The total sales for a single product is incorrect');
    }
}
