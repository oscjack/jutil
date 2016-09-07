<?php

namespace Jutil;

class Arr
{
	public static function equal($strict = false)
	{
		$x = array_values($a);
		$y = array_values($b);

	    sort($x);
	    sort($y);

	    if ($strict) {
	    	return $x === $y;
	    }

	    return $x == $y;
	}
}