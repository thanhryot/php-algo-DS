<?php declare(strict_types=1);

namespace ThanhRyot\Contracts;

interface ISearch
{
    /**
     * @param array $arr
     * @param string $x
     * @return int|null
     */
    public function search(array $arr, int $x): ?int;
}