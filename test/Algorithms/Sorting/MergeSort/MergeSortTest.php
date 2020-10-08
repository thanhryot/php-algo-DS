<?php

namespace Test\Algorithms\Sorting\MergeSort;

use PHPUnit\Framework\TestCase;
use ThanhRyot\Algorithms\Sorting\MergeSort\MergeSort;

class MergeSortTest extends TestCase
{
    private $arr = [100, 12, 22, 50, 70, 80, 1, 4, 6];

    public function testSorting()
    {
        $result = MergeSort::sort($this->arr);
        $this->assertSame([1, 4, 6, 12, 22, 50, 70, 80, 100], $result);
    }
}