<?php declare(strict_types=1);

namespace ThanhRyot\Algorithms\Searching;

use ThanhRyot\Contracts\ISearch;

class BinarySearch implements ISearch
{
    public function search(array $arr, int $x): ?int
    {
        $length = count($arr);
        $start = 0;
        $end = $length - 1;
        while ($start <= $end) {
            $mid = $start + floor(($end - $start) / 2);
            if ($arr[$mid] < $x)
                $start = $mid + 1;

            if ($arr[$mid] > $x)
                $end = $mid - 1;

            if ($arr[$mid] == $x)
                return (int)$mid;
        }
        return null;
    }
}