<?php
namespace Tests\BitManipulation;  // Make sure this matches the correct test folder

use PHPUnit\Framework\TestCase;
use App\BitManipulation\PrimeFactors; // Ensure this matches exactly

class PrimeFactorsTest extends TestCase
{
    public function testGetPrimeFactors()
    {
        $primeFactors = new PrimeFactors();

        $this->assertEquals([2, 2, 2, 7], $primeFactors->getPrimeFactors(56));
        $this->assertEquals([3, 3, 5], $primeFactors->getPrimeFactors(45));
        $this->assertEquals([13], $primeFactors->getPrimeFactors(13));
        $this->assertEquals([], $primeFactors->getPrimeFactors(1));
        $this->assertEquals([2], $primeFactors->getPrimeFactors(2));
        $this->assertEquals([2, 2, 5, 5], $primeFactors->getPrimeFactors(100));
    }
}
