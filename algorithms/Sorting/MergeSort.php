<?php

namespace ThanhRyot\Algorithms\Sorting;

class MergeSort
{
    public static function sort($array)
    {
        if (count($array) == 1) {
            return $array;
        }

        $middle = count($array) / 2;
        $left = array_slice($array, 0, $middle);
        $right = array_slice($array, $middle);
        $left = self::sort($left);
        $right = self::sort($right);

        return self::merge($left, $right);
    }


    private static function merge($left, $right)
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