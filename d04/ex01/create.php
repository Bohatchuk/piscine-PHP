<?php
	
	if (empty($_POST[login]) || empty($_POST[passwd]) || $_POST[submit] != OK) {
    	echo "ERROR\n";
    	exit ;
	}
	if (!file_exists("../private")) {
		mkdir("../private");
	}
	else if (file_exists("../private/passwd")) {
		$account = unserialize(file_get_contents("../private/passwd"));
    	foreach ($account as $data)
      		foreach ($data as $key => $value)
        		if ($key == "login" && $value == $_POST[login]) {
					echo "ERROR\n";
					exit ;
				}
	}
	$_POST[passwd] = hash(whirlpool, $_POST[passwd]);
	$account[] = $data = array("login"=>$_POST[login], "passwd"=>$_POST[passwd]);
	file_put_contents("../private/passwd", serialize($account));
	echo "OK\n";

?>