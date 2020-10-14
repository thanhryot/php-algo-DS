<?php declare(strict_types=1);

namespace Test\Algorithms\String;

use PHPUnit\Framework\TestCase;
use ThanhRyot\Algorithms\String\HammingDistance;

class HammingDistanceTest extends TestCase
{

    public function dataString()
    {
        return [
            ['toned', 'roses', 3],
            ['2143896', '2233796', 3],
            ['1011101', '1001001', 2],
            ['^$34iou_9()<>', '^$343ou_92)>>', 3],
        ];
    }

    /**
     * @dataProvider dataString
     */
    public function testCanCalcHammingDistance($string, $stringCompare, $expertedResult)
    {
        $result = (new HammingDistance())->calc($string, $stringCompare);
        $this->assertSame($expertedResult, $result);
    }
}