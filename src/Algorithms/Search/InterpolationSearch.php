<?php declare(strict_types=1);

namespace ThanhRyot\Algorithms\Search;

use ThanhRyot\Interfaces\Search as ISearch;

class InterpolationSearch implements ISearch
{
    public function search(array $arr, int $x): ?int
    {
        $length = count($arr);
        $start = 0;
        $end = $length - 1;
        while ($start <= $end) {
            $mid = $start + (($end - $start) / ($arr[$end] - $arr[$start])) * ($x - $arr[$start]);
            $mid = (int)floor($mid);
            if ($arr[$mid] == $x) return $mid;
            if ($arr[$mid] < $x)
                $start = $mid + 1;
            if ($arr[$mid] > $x)
                $end = $mid - 1;
        }
        return null;
    }
}