<?php
namespace App\Hashing;

class HashmapFrequency
{

    public function count($arr)
    {

        $hash = [];

        foreach ($arr as $num) {

            $hash[$num] = ($hash[$num] ?? 0) + 1;

        }
        return $hash;

    }
}
