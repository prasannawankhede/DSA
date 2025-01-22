<?php

namespace App;

class ArrayFilterPolyfill
{
    public function filter(array $array, $callback): array
    {
        $result = [];
        foreach ($array as $key => $value) {
            // If the callback returns true, include the element in the result array
            if ($callback($value, $key)) {
                $result[] = $value;
            }
        }
        return $result;
    }
}
