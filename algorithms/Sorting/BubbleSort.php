<?php

namespace ThanhRyot\Algorithms\Sorting;

class BubbleSort
{
    public static function sort($arr)
    {
        $length = count($arr);
        for ($i = $length; $i > 0; $i--) {
            for ($j = 0; $j < $i - 1; $j++) {
                if ($arr[$j] > $arr[$j + 1]) {
                    $tmp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $tmp;
                }
            }
        }
        return $arr;
    }
}