#!/usr/bin/php
<?php

	if ($argc == 4)
	{
		$first_num = trim($argv[1]);
		$second_num = trim($argv[3]);
		$sign = trim($argv[2]);
		if ($sign == "+")
			print(($first_num + $second_num).PHP_EOL);
		else if ($sign == "-")
			print(($first_num - $second_num).PHP_EOL);
		else if ($sign == "*")
			print(($first_num * $second_num).PHP_EOL);
		else if ($sign == "/")
			print(($first_num / $second_num).PHP_EOL);
		else if ($sign == "%")
			print(($first_num % $second_num).PHP_EOL);
	}
	else
		echo "Incorrect Parameters".PHP_EOL;

?>