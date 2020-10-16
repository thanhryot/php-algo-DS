<?php declare(strict_types=1);

namespace ThanhRyot\Algorithms\Search;

use ThanhRyot\Interfaces\Search as ISearch;

class LinearSearch implements ISearch
{
    public function search(array $arr, int $x): ?int
    {
        foreach ($arr as $key => $item) {
            if ($item == $x) {
                return $key;
            }
        }
        return null;
    }
}