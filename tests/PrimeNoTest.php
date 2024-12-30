<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\PrimeNo;

class PrimeNoTest extends TestCase {

    public function testIsPrime() {
        $primeNo = new PrimeNo();

        // Test cases
        $this->assertTrue($primeNo->find(5));   // 5 is prime
        $this->assertFalse($primeNo->find(8));  // 8 is not prime
        $this->assertTrue($primeNo->find(2));   // 2 is prime
        $this->assertFalse($primeNo->find(1));  // 1 is not prime
        $this->assertTrue($primeNo->find(11));  // 11 is prime
    }
}
