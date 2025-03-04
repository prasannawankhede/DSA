<?php
namespace Tests\HashTable;

use App\HashTable\Set;
use PHPUnit\Framework\TestCase;

class SetTest extends TestCase
{
    public function testPutWithStringKey()
    {
        $hashTable = new Set(10);
        $hashTable->put("name", "Alice");
        $this->assertSame("Alice", $hashTable->table[$hashTable->hash("name")], "Failed to set value with string key");
    }

    public function testPutWithIntegerKey()
    {
        $hashTable = new Set(10);
        $hashTable->put(25, "Number");
        $this->assertSame("Number", $hashTable->table[$hashTable->hash(25)], "Failed to set value with integer key");
    }

    public function testPutWithEmptyStringKey()
    {
        $hashTable = new Set(10);
        $hashTable->put("", "Empty");
        $this->assertSame("Empty", $hashTable->table[$hashTable->hash("")], "Failed to set value with empty string key");
    }

    public function testPutWithNegativeIntegerKey()
    {
        $hashTable = new Set(10);
        $hashTable->put(-25, "Negative");
        $this->assertSame("Negative", $hashTable->table[$hashTable->hash(-25)], "Failed to set value with negative integer key");
    }
}
