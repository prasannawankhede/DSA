<?php
namespace Tests\arrayProblems;

use App\arrayProblems\ProductOfArrayExceptSelf;
use PHPUnit\Framework\TestCase;

class ProductOfArrayExceptSelfTest extends Testcase
{

    public function testProd()
    {
        $obj = new ProductOfArrayExceptSelf();

        $arr = [1, 2, 3, 4];

        $result = $obj->product($arr);

        $this->assertEquals([24, 12, 8, 6],$result);
    }
}