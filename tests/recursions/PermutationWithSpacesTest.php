<?php

namespace Tests\Recursions;

use PHPUnit\Framework\TestCase;
use App\Recursions\PermutationWithSpaces;

class PermutationWithSpacesTest extends TestCase
{
    public function testPermutationsOfAbc()
    {
        $pws = new PermutationWithSpaces();

        ob_start();
        $pws->solve("abc");
        $output = ob_get_clean();

        $actual = explode(PHP_EOL, trim($output));
        sort($actual);

        $expected = [
            'a_b_c',
            'a_bc',
            'ab_c',
            'abc',
        ];
        sort($expected);

        $this->assertEquals($expected, $actual);
    }

    public function testSingleCharacter()
    {
        $pws = new PermutationWithSpaces();

        ob_start();
        $pws->solve("a");
        $output = ob_get_clean();

        $actual = explode(PHP_EOL, trim($output));
        $expected = ['a'];

        $this->assertEquals($expected, $actual);
    }

    public function testEmptyString()
    {
        $pws = new PermutationWithSpaces();

        ob_start();
        $pws->solve("");
        $output = ob_get_clean();

        // No output expected
        $this->assertEmpty(trim($output));
    }
}
