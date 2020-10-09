<?php

namespace ThanhRyot\Algorithms\Searching;

class LinearSearch
{
    public static function search($arr, $x)
    {
        foreach ($arr as $key => $item) {
            if ($item == $x) {
                return $key;
            }
        }
        return null;
    }
}