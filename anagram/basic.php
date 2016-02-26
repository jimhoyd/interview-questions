<?php

function isAnagram($pharse1, $pharse2) {
	$pharse1 = str_split(strtolower($pharse1));
	$pharse2 = str_split(strtolower($pharse2));
	sort($pharse1);
	sort($pharse2);	
	
	return ($pharse1 == $pharse2);
}

$pharse1 = 'ball';
$pharse2 = 'lbal';

var_dump(isAnagram($pharse1, $pharse2));
