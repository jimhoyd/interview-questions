<?php

// convert to "dog lazy the over jumps fox brown quick the"

$string = "the quick brown fox jumps over the lazy dog";

function reverseWordsInSentence($string) {
	$buffer = "";
	
	// loop in reverse
	for($i = strlen($string)-1; $i>=0; $i--) {
		if($string[$i] != " ") {
			// prepend to buffer
			$buffer = $string[$i] . $buffer;
		} else {
			// output the buffer when you hit a space
			echo $buffer.$string[$i];
			// clear the buffer for the next word
			$buffer = "";			
		}
		
	}
}

echo reverseWordsInSentence($string).PHP_EOL;
