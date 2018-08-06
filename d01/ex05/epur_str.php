#!/usr/bin/php
<?php

	if ($argc < 2)
		exit ;
	$str = trim($argv[1]);
	while (strpos($str, "  ") == true)
		$str = str_replace("  ", " ", $str);
	echo $str.PHP_EOL;
	
?>