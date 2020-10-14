<?php declare(strict_types=1);

namespace ThanhRyot\Algorithms\String;

use LengthException;

class HammingDistance
{
    /**
     * @param string $a
     * @param string $b
     * @return int
     * @throws LengthException
     */
    public function calc(string $a, string $b)
    {
        if (strlen($a) !== strlen($b)) {
            throw new LengthException('Strings must be of the same length');
        }
        $distance = 0;
        for ($i = 0; $i < strlen($a); $i++) {
            if ($a[$i] !== $b[$i]) {
                $distance++;
            }
        }
        return $distance;
    }
}