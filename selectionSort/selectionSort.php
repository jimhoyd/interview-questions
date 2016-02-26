<?php
	
function selectionSort($data) {

	$count = count($data);

	for($i = 0; $i<$count-2; $i++) {
		$smallestIndex = $i;
		for($j = $i+1; $j<$count-1; $j++) {
			if($data[$j] < $data[$smallestIndex]) {
				$smallestIndex = $j;
			}
		}		
		$tmp = $data[$i];
		$data[$i] = $data[$smallestIndex];
		$data[$smallestIndex] = $tmp;
	}
	
	return $data;
	
}

$data = [7, 3, 9, 2, 4, 8, 10];

var_dump(selectionSort($data));

//O(n^2)


