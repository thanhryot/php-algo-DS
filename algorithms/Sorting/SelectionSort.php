<?php

namespace ThanhRyot\Algorithms\Sorting;

class SelectionSort
{
    public static function sort($arr)
    {
        $length = count($arr);
        for ($i = 0; $i < $length; $i++) {
            $min = $i;
            for ($j = $i + 1; $j < $length; $j++) {
                if ($arr[$j] < $arr[$min]) {
                    $min = $j;
                }
            }
            if ($min != $i) {
                $tmp = $arr[$min];
                $arr[$min] = $arr[$i];
                $arr[$i] = $tmp;
            }
        }
        return $arr;
    }
}