#!/usr/bin/php
<?php

	// $tab = array("!/@#;^", "42", "Hello World", "zhi", "zZzZzZz");
	// // $tab[] = "What are we doing now ?";
	// if (ft_is_sort($tab))
	// 	echo "The array is sorted\n";
	// else
	// 	echo "The array is not sorted\n";

	function ft_is_sort($str)
	{
		$temp = $str;
		sort($temp);
		if (array_diff_assoc($str, $temp) == NULL)
			return (1);
		return (0);
	}

?>