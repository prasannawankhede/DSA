<?php

use PHPUnit\Framework\TestCase;
use App\FizzBuzzProblem;

class FizzBuzzProblemTest extends TestCase {

    #[\PHPUnit\Framework\Attributes\Test]
    public function testFizzBuzz() {
        $fizzBuzz = new FizzBuzzProblem();

        // Test case 1: Array with numbers divisible by 3, 5, and both
        $input = [1, 3, 5, 15, 16, 30];
        $expected = [1, "Fizz", "Buzz", "FizzBuzz", 16, "FizzBuzz"];
        $result = $fizzBuzz->fizz($input);
        $this->assertEquals($expected, $result, "Failed for input [1, 3, 5, 15, 16, 30]");

        // Test case 2: Array with no numbers divisible by 3 or 5
        $input = [1, 2, 4, 7];
        $expected = [1, 2, 4, 7];
        $result = $fizzBuzz->fizz($input);
        $this->assertEquals($expected, $result, "Failed for input [1, 2, 4, 7]");

        // Test case 3: Array with only numbers divisible by 3
        $input = [3, 6, 9, 12];
        $expected = ["Fizz", "Fizz", "Fizz", "Fizz"];
        $result = $fizzBuzz->fizz($input);
        $this->assertEquals($expected, $result, "Failed for input [3, 6, 9, 12]");

        // Test case 4: Array with only numbers divisible by 5
        $input = [5, 10, 20, 25];
        $expected = ["Buzz", "Buzz", "Buzz", "Buzz"];
        $result = $fizzBuzz->fizz($input);
        $this->assertEquals($expected, $result, "Failed for input [5, 10, 20, 25]");

        // Test case 5: Empty array
        $input = [];
        $expected = [];
        $result = $fizzBuzz->fizz($input);
        $this->assertEquals($expected, $result, "Failed for empty input");
    }
}
