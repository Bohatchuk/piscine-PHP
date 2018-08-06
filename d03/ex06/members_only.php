<?php
	
	if ($_SERVER['PHP_AUTH_USER'] === "zaz" && $_SERVER['PHP_AUTH_PW'] === "jaimelespetitsponeys")
	{
		echo "<html><body>".PHP_EOL."Hello Zaz<br />".PHP_EOL;
		echo "<img src='data:image/png;base64,".base64_encode(file_get_contents("../img/42.png"))."'>".PHP_EOL;
		echo "</body></html>".PHP_EOL;
		exit ;
	}
	else
		header('HTTP/1.0 401 Unauthorized');
        header('WWW-Authenticate: Basic realm=\'\'Espace membres\'\'');
		echo "<html><body>That area is accessible for members only</body></html>".PHP_EOL;
		exit ;

?>