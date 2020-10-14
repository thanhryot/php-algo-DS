<?php declare(strict_types=1);

namespace ThanhRyot\Algorithms\Sorting;

use ThanhRyot\Contracts\ISort;

class QuickSort implements ISort
{
    public function partition(&$arr, $low, $high): int
    {
        $pivot = $arr[floor(($low + $high) / 2)];
        $left = $low;
        $right = $high;

        while ($left <= $right) {
            while ($arr[$left] < $pivot)
                $left++;
            while ($arr[$right] > $pivot)
                $right--;
            if ($left <= $right) {
                $tmp = $arr[$left];
                $arr[$left] = $arr[$right];
                $arr[$right] = $tmp;
                $left++;
                $right--;
            }
        }
        return $left;
    }

    public function recursive(&$arr, $left, $right): void
    {
        $index = self::partition($arr, $left, $right);
        if ($left < $index - 1)
            self::recursive($arr, $left, $index - 1);
        if ($index < $right)
            self::recursive($arr, $index, $right);
    }

    public function sort(array $arr): array
    {
        $this->recursive($arr, 0, count($arr) - 1);
        return $arr;
    }
}