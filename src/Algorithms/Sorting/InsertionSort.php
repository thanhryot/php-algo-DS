<?php declare(strict_types=1);

namespace ThanhRyot\Algorithms\Sorting;

use ThanhRyot\Interfaces\Sort as ISort;

class InsertionSort implements ISort
{
    public function sort(array $arr): array
    {
        for ($i = 1; $i < count($arr); $i++) {
            $key = $arr[$i];
            $j = $i - 1;

            while ($j >= 0 && $arr[$j] > $key) {
                $arr[$j + 1] = $arr[$j];
                $j = $j - 1;
            }
            $arr[$j + 1] = $key;
        }
        return $arr;
    }
}