<?php

namespace ThanhRyot\Algorithms\Search\BinarySearch;

use SebastianBergmann\CodeCoverage\Report\PHP;

class BinarySearch
{
    /**
     * @param $arr
     * @param $x
     * @return int|null
     */
    public static function search($arr, $x)
    {
        $length = count($arr);
        $startIndex = 0;
        $endIndex = $length - 1;
        while ($startIndex <= $endIndex) {
            $middleIndex = $startIndex + floor(($endIndex - $startIndex) / 2);
            if ($arr[$middleIndex] < $x)
                $startIndex = $middleIndex + 1;

            if ($arr[$middleIndex] > $x)
                $endIndex = $middleIndex - 1;

            if ($arr[$middleIndex] == $x)
                return (int)$middleIndex;
        }
        return null;
    }
}