<?php declare(strict_types=1);

namespace ThanhRyot\Contracts;

interface ISort
{
    /**
     * @param array $arr
     * @return array
     */
    public function sort(array $arr): array;
}