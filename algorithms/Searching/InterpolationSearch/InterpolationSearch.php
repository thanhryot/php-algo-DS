<?php

namespace ThanhRyot\Algorithms\Searching\InterpolationSearch;

class InterpolationSearch
{
    /**
     * @param $arr
     * @param $x
     * @return int|null
     */
    public static function search($arr, $x)
    {
        $length = count($arr);
        $firstIndex = 0;
        $lastIndex = $length - 1;
        while ($firstIndex <= $lastIndex) {
            $middle = $firstIndex + (($lastIndex - $firstIndex) / ($arr[$lastIndex] - $arr[$firstIndex])) * ($x - $arr[$firstIndex]);
            $middle = (int)floor($middle);
            if ($arr[$middle] == $x) return $middle;
            if ($arr[$middle] < $x)
                $firstIndex = $middle + 1;
            if ($arr[$middle] > $x)
                $lastIndex = $middle - 1;
        }
        return null;
    }
}