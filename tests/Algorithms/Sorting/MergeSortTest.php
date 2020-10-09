<?php declare(strict_types=1);

namespace Test\Algorithms\Sorting\MergeSort;

use PHPUnit\Framework\TestCase;
use ThanhRyot\Algorithms\Sorting\MergeSort;

class MergeSortTest extends TestCase
{
    private $arr = [100, 12, 22, 50, 70, 80, 1, 4, 6];

    public function testSorting()
    {
        $result = (new MergeSort())->sort($this->arr);
        $this->assertSame([1, 4, 6, 12, 22, 50, 70, 80, 100], $result);
    }
}