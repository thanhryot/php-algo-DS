<?php declare(strict_types=1);

namespace ThanhRyot\Interfaces;

interface Search
{
    /**
     * Search an item in array.
     *
     * @param array $arr
     * @param string $x
     * @return int|null
     */
    public function search(array $arr, int $x): ?int;
}