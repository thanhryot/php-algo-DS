<?php

namespace Test\Algorithms\Sorting\QuickSort;

use PHPUnit\Framework\TestCase;
use ThanhRyot\Algorithms\Sorting\QuickSort\QuickSort;

class QuickSortTest extends TestCase
{
    private $arr = [100, 12, 22, 50, 70, 80, 1, 4, 6];

    public function testSorting()
    {
        QuickSort::sort($this->arr, 0 , count($this->arr) - 1);
        $this->assertSame([1, 4, 6, 12, 22, 50, 70, 80, 100], $this->arr);
    }
}