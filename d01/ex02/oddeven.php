#!/usr/bin/php
<?php

	while(1)
	{
		echo "Enter a number: ";
		$num = trim(fgets(STDIN));
		if (feof(STDIN))
			exit ;
		if (!is_numeric($num))
			echo "'$num' is not a number".PHP_EOL;
		else
		{
			echo "The number $num is ";
			if ($num % 2 == 0)
				echo "even".PHP_EOL;
			else
				echo "odd".PHP_EOL;
		}
	}
	
?>
