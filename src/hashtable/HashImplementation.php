<?php
namespace App\HashTable;

class HashImplementation
{
    private $table;
    private $size;

    public function __construct($size)
    {
        $this->size  = $size;
        $this->table = array_fill(0, $size, []);
    }

    private function hash($key)
    {
        $total = 0;
        if (is_string($key)) {
            for ($i = 0; $i < strlen($key); $i++) {
                $total += ord($key[$i]);
            }
        } elseif (is_int($key)) {
            $total = $key;
        }
        return $total % $this->size;
    }

    public function set($key, $value)
    {
        $index = $this->hash($key);

        if (! isset($this->table[$index])) {
            $this->table[$index] = [];
        }

        foreach ($this->table[$index] as $i => $item) {
            if ($item[0] === $key) {
                $this->table[$index][$i][1] = $value;
                return;
            }
        }

        $this->table[$index][] = [$key, $value];
    }

    public function get($key)
    {
        $index  = $this->hash($key);
        $bucket = $this->table[$index];

        foreach ($bucket as $item) {
            if ($item[0] === $key) {
                return $item[1];
            }
        }
        return null;
    }

    public function remove($key)
    {
        $index = $this->hash($key);
        if (isset($this->table[$index])) {
            foreach ($this->table[$index] as $i => $item) {
                if ($item[0] === $key) {
                    array_splice($this->table[$index], $i, 1);
                    return;
                }
            }
        }
    }

    public function display()
    {
        foreach ($this->table as $i => $bucket) {
            if (!empty($bucket)) {
                echo "$i: ";
                foreach ($bucket as $item) {
                    echo "[{$item[0]} => {$item[1]}] ";
                }
                echo PHP_EOL;
            }
        }
    }

}
