<?php

namespace ThanhRyot\Algorithms\Sorting\QuickSort;

class QuickSort
{
    public static function partition(&$arr, $low, $high)
    {
        $pivot = $arr[floor(($low + $high) / 2)];
        $leftIndex = $low;
        $rightIndex = $high;

        while ($leftIndex <= $rightIndex) {
            while ($arr[$leftIndex] < $pivot)
                $leftIndex++;
            while ($arr[$rightIndex] > $pivot)
                $rightIndex--;
            if ($leftIndex <= $rightIndex) {
                $tmp = $arr[$leftIndex];
                $arr[$leftIndex] = $arr[$rightIndex];
                $arr[$rightIndex] = $tmp;
                $leftIndex++;
                $rightIndex--;
            }
        }
        return $leftIndex;
    }

    public static function sort(&$arr, $leftIndex, $rightIndex)
    {
        $index = self::partition($arr, $leftIndex, $rightIndex);
        if ($leftIndex < $index - 1)
            self::sort($arr, $leftIndex, $index - 1);
        if ($index < $rightIndex)
            self::sort($arr, $index, $rightIndex);
    }
}