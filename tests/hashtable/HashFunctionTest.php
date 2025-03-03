<?php
namespace Tests\HashTable;

use App\HashTable\HashFunction;
use PHPUnit\Framework\TestCase;

class HashFunctionTest extends TestCase
{
    public function testHashWithStringKey()
    {
        $hash = new HashFunction(10);
        $result = $hash->hash("name");
        $this->assertSame(7, $result, "Hash value for 'name' is incorrect");
    }

    public function testHashWithIntegerKey()
    {
        $hash = new HashFunction(10);
        $result = $hash->hash(25);
        $this->assertSame(5, $result, "Hash value for 25 is incorrect");
    }

    public function testHashWithEmptyString()
    {
        $hash = new HashFunction(10);
        $result = $hash->hash("");
        $this->assertSame(0, $result, "Hash value for empty string is incorrect");
    }

    public function testHashWithSpecialCharacters()
    {
        $hash = new HashFunction(10);
        $result = $hash->hash("!@#$");
        $this->assertSame(8, $result, "Hash value for '!@#$' is incorrect");
    }
}
