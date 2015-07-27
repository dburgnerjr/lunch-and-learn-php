<?php

namespace Chadicus;

abstract class Math
{

    public static function multiply($a, $b)
    {
        if (!is_numeric($a) || !is_numeric($b)) {
            throw new \InvalidArgumentException('Both inputs must be numeric');
        }
        return ($a * $b);
    }
    public static function sub($x, $y)
    {
        if (!is_int($x) || !is_int($y)) {
            throw new \InvalidArgumentException('$x and $y must be integers');
        }
        return $x - $y;
    }

    public function addition($param1, $param2)
    {
        throw new Exception;
        return ($param1 + $param2);

    }
}
