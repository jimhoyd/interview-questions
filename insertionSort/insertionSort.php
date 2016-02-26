<?php
	
function insertionSort($data) {

	$count = count($data);

	for($i = 0; $i<$count-1; $i++) {
		$current = $data[$i];
		$j = $i - 1;
		while($j >= 0 && $data[$j] > $current) {
			$data[$j+1] = $data[$j];
			$j--;
		}
		$data[$j+1] = $current;
	}
	
	return $data;
	
}

$data = [7, 3, 9, 2, 4, 8, 10];

var_dump(insertionSort($data));

//O(n^2)


