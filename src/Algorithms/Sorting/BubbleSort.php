<?php declare(strict_types=1);

namespace ThanhRyot\Algorithms\Sorting;

use ThanhRyot\Interfaces\Sort as ISort;

class BubbleSort implements ISort
{
    public function sort(array $arr): array
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