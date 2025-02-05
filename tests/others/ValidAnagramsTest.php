<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\ValidAnagrams;

class ValidAnagramsTest extends TestCase
{
    public function testValidAnagrams()
    {
        $validAnagrams = new ValidAnagrams();
        
        // Test case 1: valid anagrams
        $result = $validAnagrams->check('listen', 'silent');
        $this->assertTrue($result, "The words 'listen' and 'silent' should be anagrams.");
        
        // Test case 2: not valid anagrams
        $result = $validAnagrams->check('hello', 'world');
        $this->assertFalse($result, "The words 'hello' and 'world' should not be anagrams.");
        
        // Test case 3: valid anagrams with different lengths (should fail)
        $result = $validAnagrams->check('astronomer', 'moonstarer');
        $this->assertTrue($result, "The words 'astronomer' and 'moonstarer' should be anagrams.");
        
        // Test case 4: strings with different characters
        $result = $validAnagrams->check('abc', 'def');
        $this->assertFalse($result, "The words 'abc' and 'def' should not be anagrams.");
        
        // Test case 5: valid anagrams with the same characters in different order
        $result = $validAnagrams->check('abcd', 'dcba');
        $this->assertTrue($result, "The words 'abcd' and 'dcba' should be anagrams.");
        
        // Test case 6: edge case with empty strings (valid anagrams)
        $result = $validAnagrams->check('', '');
        $this->assertTrue($result, "Empty strings should be considered valid anagrams.");
        
        // Test case 7: single character strings
        $result = $validAnagrams->check('a', 'a');
        $this->assertTrue($result, "Single character strings 'a' and 'a' should be anagrams.");
        
        // Test case 8: single character strings that are different
        $result = $validAnagrams->check('a', 'b');
        $this->assertFalse($result, "Single character strings 'a' and 'b' should not be anagrams.");
    }
}
