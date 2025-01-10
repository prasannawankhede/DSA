<?php

use PHPUnit\Framework\TestCase;
use App\TitleCase;

class TitleCaseTest extends TestCase
{
    #[\PHPUnit\Framework\Attributes\Test]
    public function testConvertsStringToTitleCase()
    {
        $titleCase = new TitleCase();

        $result = $titleCase->titleCase('hello world');
        $this->assertEquals('Hello World', $result);

        $result = $titleCase->titleCase('this is a test sentence');
        $this->assertEquals('This Is A Test Sentence', $result);

        $result = $titleCase->titleCase('HELLO WORLD');
        $this->assertEquals('Hello World', $result);

        $result = $titleCase->titleCase('tHis IS a TeSt');
        $this->assertEquals('This Is A Test', $result);
    }
}
