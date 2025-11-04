<?php
function getClassForValue($value)
{
	if ($value === 'noVal' || $value === null) {
		return 'noVal';
	}

	$class = "empty";

	if ($value <= -0.25) {
		$class = 'negative';
	} else if ($value >= 0.25) {
		$class = 'positive';
	}

	$value = abs($value);
	if (abs($value) >= 0.25 && abs($value) < 0.4) {
		$class .= " low";
	} else if (abs($value) >= .4 && abs($value) < .65) {
		$class .= " med";
	} else if (abs($value) >= .65) {
		$class .= " high";
	}

	return $class;
}

?>