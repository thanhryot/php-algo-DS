<?php

namespace Test\Algorithms\Searching\InterpolationSearch;

use PHPUnit\Framework\TestCase;
use ThanhRyot\Algorithms\Searching\InterpolationSearch\InterpolationSearch;

class InterpolationSearchTest extends TestCase
{
    private $arr = [1, 3, 5, 23, 44, 55, 70, 100];

    public function testCanSearch()
    {
        $result = InterpolationSearch::search($this->arr, 70);
        $this->assertSame(6, $result);
    }

    public function testCanNotGetResult()
    {
        $result = InterpolationSearch::search($this->arr, 101);
        $this->assertNull($result);
    }
}