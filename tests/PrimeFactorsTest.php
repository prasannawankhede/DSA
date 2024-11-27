<?php

use PHPUnit\Framework\TestCase;
use App\PrimeFactors;


class PrimeFactorsTest extends TestCase{

   public function testNew(){
        $Prime = new PrimeFactors();
        $result = $Prime->generate($number);

        $this->assertEquals($expected,$result);
        // $this->assertEquals($expected, $factors->generate($number));
    }

    public function factors()
    {
        return [
            
            [2, [2]],
            [3, [3]],
            [4, [2, 2]],
            [5, [5]],
            [6, [2, 3]],
            [7, [7]],
            [8, [2, 2, 2]],
            [9, [3, 3]],
            [11, [11]],
            [12, [2, 2, 3]],
            [17, [17]],
            [100, [2, 2, 5, 5]]
        ];
    }
}
