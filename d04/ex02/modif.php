<?php

	if (empty($_POST['login']) || empty($_POST['oldpw']) || empty($_POST['newpw']) || $_POST['submit'] != OK) {
		echo "ERROR\n";
		exit ;
	}
	if (file_exists("../private/passwd")) {
		$account = unserialize(file_get_contents("../private/passwd"));
		foreach ($account as $key => $value)
			if ($value['login'] == $_POST['login'] && hash('whirlpool', $_POST['oldpw']) == $value['passwd']) {
				$account[$key]['passwd'] = hash('whirlpool', $_POST['newpw']);
				file_put_contents("../private/passwd", serialize($account));
				echo "OK\n";
			exit ;
			}
	}
	echo "ERROR\n";
	exit ;

?>