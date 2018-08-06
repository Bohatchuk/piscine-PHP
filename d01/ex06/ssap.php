#!/usr/bin/php
<?php

	function ft_split($str)
	{
		$str = trim($str);
		$array = array_filter(explode(" ", $str));
		sort($array);
		return($array);
	}
	
	$tab = array();
	$res = array();
	if ($argc < 2)
		exit ;
	for ($i = 1; $i < $argc; $i++)
		$tab[] = ft_split($argv[$i]);
	foreach ($tab as $tab_elem)
		$res = array_merge($res, $tab_elem);
	sort($res);
	foreach ($res as $res_elem)	
		echo $res_elem.PHP_EOL;
		
?>