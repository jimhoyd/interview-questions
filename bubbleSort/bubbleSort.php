<?php
	
function bubbleSort($data) {
	$count = count($data);
	for($i=1; $i<=$count; $i++) {
		for($j=0; $j<$count-$i; $j++) {
			if($data[$j+1] < $data[$j]) {
				$tmp = $data[$j];
				$data[$j] = $data[$j+1];
				$data[$j+1] = $tmp;
			}
		}
	}
	
	return $data;
	
}

$data = [7, 3, 9, 2, 4, 8, 10];

var_dump(bubbleSort($data));