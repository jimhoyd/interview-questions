function binary_search($x, $list) {
	$left = 0;
	right = count($list) - 1;
		
	while($left <= $right) {
		$mid = floor(($left + $right) / 2);
		
		if($list[$mid] == $x) {
			return $mid;
		} elseif($list[$mid] > $x) {
			$right = $mid - 1;
		} elseif($list[$mid] < $x) {
			left = $mid + 1;
		}	
	}

	return -1;
}