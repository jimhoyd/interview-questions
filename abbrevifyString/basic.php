<?php

/**
 * Abbreviates a string into the:
 * [first letter] + [number of letters removed] + [last letter]
 *
 * Examples:
 * internationalization => i18n
 * localization => l10n
 * hello => h3o
 *
 * @param string $str The string to abbreviate
 * @return string The abbreviated string
 */

function abbrevify($str) {
	if(strlen($str) <= 3) {
		return $str;
	}
  
	return $str[0].(strlen($str)-2).$str[strlen($str)-1];
}

/***** TEST CASES *****/
echo abbrevify('internationalization') . PHP_EOL; // i18n
echo abbrevify('localization') . PHP_EOL; // l10n
echo abbrevify('hello') . PHP_EOL; // h3o

echo abbrevify('hey') . PHP_EOL; // ???
echo abbrevify('hi') . PHP_EOL; // ???
echo abbrevify('i') . PHP_EOL; // ???
