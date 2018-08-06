#!/usr/bin/php
<?php

	function ft_split($str)
	{
		$array = array_filter(explode(" ", trim($str)));
		sort($array);
		return($array);
	}

?>
