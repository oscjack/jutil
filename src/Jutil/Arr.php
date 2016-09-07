<?php

namespace Jutil;

class Arr
{
	public static function equal($a = [], $b = [], $strict = false)
	{
		if (count($a) !== count($b)) {
			return false;
		}
		
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