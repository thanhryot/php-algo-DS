<?php declare(strict_types=1);

namespace ThanhRyot\Algorithms\Sorting;

use ThanhRyot\Contracts\ISort;

class SelectionSort implements ISort
{
    public function sort(array $arr): array
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