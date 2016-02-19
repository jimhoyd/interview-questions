function binary_search($x, $list, $left, $right) {
	
	if($left > $right) {
		return -1;
	}

	$mid = floor(($left + $right)/2);
	
	if($list[$mid] == $x) {
		return $mid;
	} elseif($list[$mid] > $x) {
		return binary_search($x, $list, $left, $mid-1);
	} elseif($list[$mid] < $x) {
		return binary_search($x, $list, $mid+1, $right);
	}

}