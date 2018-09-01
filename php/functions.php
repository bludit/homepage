<?php defined('BLUDIT') or die('BLUDIT');

function l($key, $print=true) {
	global $languageArray;
	$key = mb_strtolower($key, CHARSET);
	$key = str_replace(' ','-',$key);
	if (isset($languageArray[$key])) {
		if ($print) {
			echo $languageArray[$key];
		} else {
			return $languageArray[$key];
		}
	}
}

function css($filename) {
	echo '<link rel="stylesheet" href="'.DOMAIN.'/css/'.$filename.'?version='.VERSION.'">'.PHP_EOL;
}

function js($filename) {
	echo '<script src="'.DOMAIN.'/js/'.$filename.'?version='.VERSION.'"></script>'.PHP_EOL;
}