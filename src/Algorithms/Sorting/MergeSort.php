<?php declare(strict_types=1);

namespace ThanhRyot\Algorithms\Sorting;

use ThanhRyot\Contracts\ISort;

class MergeSort implements ISort
{
    public function sort(array $arr): array
    {
        if (count($arr) == 1) {
            return $arr;
        }

        $middle = (int)(count($arr) / 2);
        $left = array_slice($arr, 0, $middle);
        $right = array_slice($arr, $middle);
        $left = $this->sort($left);
        $right = $this->sort($right);

        return $this->merge($left, $right);
    }

    private function merge(array $left, array $right)
    {
        $res = array();

        while (count($left) > 0 && count($right) > 0) {
            if ($left[0] > $right[0]) {
                $res[] = $right[0];
                $right = array_slice($right, 1);
            } else {
                $res[] = $left[0];
                $left = array_slice($left, 1);
            }
        }

        while (count($left) > 0) {
            $res[] = $left[0];
            $left = array_slice($left, 1);
        }

        while (count($right) > 0) {
            $res[] = $right[0];
            $right = array_slice($right, 1);
        }

        return $res;
    }
}