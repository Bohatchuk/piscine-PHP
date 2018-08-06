#!/usr/bin/php
<?php

	function ft_split($str)
	{
		$array = array_filter(explode(" ", trim($str)));
		sort($array);
		return($array);
	}

	function call($s1, $s2)
	{
		$i = 0;
		$len1 = strlen($s1);
		$len2 = strlen($s2);
		while ((ord($s1[$i])) && (ord($s2[$i])) && (!$cmp = compare($s1[$i], $s2[$i])))
			$i++;
		if (!$cmp)
			return (($len1 < $len2) ? -1 : 1);
		return ($cmp);
	}

	function compare($s1, $s2)
	{
		if (ctype_alpha($s1) && ctype_alpha($s2))
			return (ord(strtolower($s1)) - ord(strtolower($s2)));
		if (is_numeric($s1) && is_numeric($s2))
			return (ord($s1) - ord($s2));
		if (ctype_alpha($s1) || ctype_alpha($s2))
			return ((ctype_alpha($s1)) ? -1 : 1);
		if (is_numeric($s1) || is_numeric($s2))
			return ((is_numeric($s1)) ? -1 : 1);
		return (ord($s1) - ord($s2));
	}

	$tab = array();
	$res = array();
	if ($argc < 2)
		exit ;
	for ($i = 1; $i < $argc; $i++)
		array_push($tab, ft_split($argv[$i]));
	foreach ($tab as $tab_elem)
		$res = array_merge($res, $tab_elem);
	usort($res, call);
	foreach ($res as $res_elem)
		echo $res_elem.PHP_EOL;
?>