<?php
namespace App\ArrayProblems;

class FindUnion
{
    public function findUnion(array $arr1, array $arr2): array
    {
        $i     = 0;
        $j     = 0;
        $union = [];

        while ($i < count($arr1) && $j < count($arr2)) {
            if ($arr1[$i] < $arr2[$j]) {
                if (empty($union) || end($union) !== $arr1[$i]) {
                    $union[] = $arr1[$i];
                }
                $i++;
            } elseif ($arr1[$i] > $arr2[$j]) {
                if (empty($union) || end($union) !== $arr2[$j]) {
                    $union[] = $arr2[$j];
                }
                $j++;
            } else { // arr1[i] == arr2[j]
                if (empty($union) || end($union) !== $arr1[$i]) {
                    $union[] = $arr1[$i];
                }
                $i++;
                $j++;
            }
        }

        while ($i < count($arr1)) {
            if (empty($union) || end($union) !== $arr1[$i]) {
                $union[] = $arr1[$i];
            }
            $i++;
        }

        while ($j < count($arr2)) {
            if (empty($union) || end($union) !== $arr2[$j]) {
                $union[] = $arr2[$j];
            }
            $j++;
        }

        return $union;
    }
}
