<?php

$sum = 10;
$numbers = [1, 9, 2, 4, 5, 3, 7];

function pairToken($first, $second) {
	if($first < $second) {
		return $first.'+'.$second;
	}
	return $second.'+'.$first;
}

function getPairsThatEqualToSum($sum, $numbers) {
	$pairs = [];

	foreach($numbers as $first) {
		foreach($numbers as $second) {
			if($first == $second) {
				continue;
			}			
			$token = pairToken($first, $second);
			if($first+$second == $sum && !in_array($token, $pairs)) {
				array_push($pairs, $token);			
			}			
		}
	}

	return $pairs;
}

var_dump(getPairsThatEqualToSum($sum, $numbers));
