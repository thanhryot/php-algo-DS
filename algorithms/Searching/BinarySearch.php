<?php declare(strict_types=1);

namespace ThanhRyot\Algorithms\Searching;

use ThanhRyot\Contracts\ISearch;

class BinarySearch implements ISearch
{
    public function search(array $arr, int $x): ?int
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