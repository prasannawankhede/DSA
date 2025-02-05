<?php
use App\HashtagGenerator;
use PHPUnit\Framework\TestCase;

class HashtagGeneratorTest extends TestCase
{
    public function testGenerateWithValidInput()
    {
        $generator = new HashtagGenerator();
        $result    = $generator->generate("hello world");
        $this->assertEquals("#HelloWorld", $result, "The hashtag for 'hello world' should be '#HelloWorld'.");
    }

    public function testGenerateWithEmptyString()
    {
        $generator = new HashtagGenerator();
        $result    = $generator->generate("");
        $this->assertFalse($result, "An empty string should return false.");
    }

    public function testGenerateWithSpacesOnly()
    {
        $generator = new HashtagGenerator();
        $result    = $generator->generate("    ");
        $this->assertFalse($result, "A string with only spaces should return false.");
    }

//     public function testGenerateWithLongString()
// {
//     $generator = new HashtagGenerator();
//     $longString = str_repeat("word ", 30); // Generates a long string
//     $result = $generator->generate($longString);
//     // Assert that it returns false if it exceeds 140 characters
//     $this->assertFalse($result, "Should return false if the hashtag exceeds 140 characters.");
// }

    public function testGenerateWithExtraSpaces()
    {
        $generator = new HashtagGenerator();
        $result    = $generator->generate("   this is   a test   ");
        $this->assertEquals("#ThisIsATest", $result, "Leading, trailing, and extra spaces should be handled correctly.");
    }

    public function testGenerateWithSingleWord()
    {
        $generator = new HashtagGenerator();
        $result    = $generator->generate("hashtag");
        $this->assertEquals("#Hashtag", $result, "A single word should return a valid hashtag.");
    }
}
