<?php

// convert to "dog lazy the over jumps fox brown quick the"

$string = "the quick brown fox jumps over the lazy dog";

function reverseWordsInSentence($string) {
	return join(' ', array_reverse(explode(' ', $string)));
}

echo reverseWordsInSentence($string).PHP_EOL;
