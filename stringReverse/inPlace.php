<?php
	
$string = 'abcdefghijklmnopqrstuvwxyz';

function reverseString($string) {
	$string = str_split($string);
	$left = 0;
	$right = count($string) - 1;
	
	while($left < $right) {
		$tmp = $string[$left];
		$string[$left] = $string[$right];
		$string[$right] = $tmp;		
		
        $left++;
		$right--;
	}
	
	return join('', $string);
}
	
var_dump(reverseString($string));
	
?>