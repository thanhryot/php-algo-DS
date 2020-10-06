<?php

namespace Test\Algorithms\Sorting\BubbleSort;

use PHPUnit\Framework\TestCase;
use ThanhRyot\Algorithms\Sorting\BubbleSort\BubbleSort;

class BubbleSortTest extends TestCase
{
    private $arr = [100, 12, 22, 50, 70, 80, 1, 4, 6];

    public function testSorting()
    {
        $result = BubbleSort::sort($this->arr);
        $this->assertSame([1, 4, 6, 12, 22, 50, 70, 80, 100], $result);
    }

}