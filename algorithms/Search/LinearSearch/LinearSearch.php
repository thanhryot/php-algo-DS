<?php

namespace ThanhRyot\Algorithms\Search\LinearSearch;

class LinearSearch
{
    /**
     * @param $arr
     * @param $x
     * @return int|null
     */
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