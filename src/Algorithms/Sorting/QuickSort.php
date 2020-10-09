<?php declare(strict_types=1);

namespace ThanhRyot\Algorithms\Sorting;

use ThanhRyot\Contracts\ISort;

class QuickSort implements ISort
{
    public function partition(&$arr, $low, $high): int
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

    public function recursive(&$arr, $leftIndex, $rightIndex): void
    {
        $index = self::partition($arr, $leftIndex, $rightIndex);
        if ($leftIndex < $index - 1)
            self::recursive($arr, $leftIndex, $index - 1);
        if ($index < $rightIndex)
            self::recursive($arr, $index, $rightIndex);
    }

    public function sort(array $arr): array
    {
        $this->recursive($arr, 0, count($arr) - 1);
        return $arr;
    }
}