<?php

$data = [];

for($i=0; $i < 100; $i++) {
	if($i % 3 == 0 && $i  % 5 == 0) {
		array_push($data, 'FizzBuzz');
	} else if($i % 3 == 0) {
		array_push($data, 'Fizz');		
	} else if($i % 5 == 0) {
		array_push($data, 'Buzz');		
	} else {
		array_push($data, $i);		
	}
}

var_dump($data);