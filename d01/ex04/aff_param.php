#!/usr/bin/php
<?php

	if ($argc < 2)
		exit ;
	for ($i = 1; $i < $argc; $i++)
		echo $argv[$i].PHP_EOL;

?>