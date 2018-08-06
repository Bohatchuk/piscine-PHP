#!/usr/bin/php
<?php

	if ($argc < 2)
		exit ;
	$tab = array_filter(explode(" ", trim($argv[1])));
	array_push($tab, $tab[0]);
	$tab = array_splice($tab, 1);
	foreach ($tab as $tab_elem)
		$res .= $tab_elem." ";
	echo trim($res).PHP_EOL;
?>