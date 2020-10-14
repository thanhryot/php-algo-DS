<?php declare(strict_types=1);

namespace ThanhRyot\Contracts;

interface ISearch
{
    /**
     * Searching an item in array.
     *
     * @param array $arr
     * @param string $x
     * @return int|null
     */
    public function search(array $arr, int $x): ?int;
}