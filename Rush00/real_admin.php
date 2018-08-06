<?php
	
	session_start();

	if (empty($_SESSION["logged_in_user"])) {
		header("Location: index.php");
		die();
	}

?>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Page</title>
	<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
	<table>
		<tr>
			<td id="table"><p><a href="index.php">Вернуться на сайт</a></p></td>
			<td id="table"><p><a href="goods.php">Добавить товар</a></p></td>
			<td id="table"><p><a href="users.php">Юзер менеджмент</a></p></td>
		</tr>
	</table>
	<div id="clear"></div>
		<div id="footer">
			<p>Copyright &copy; lollipop.com 2018 All Rights Reserved<br />
			Design by <a href="https://profile.intra.42.fr/users/dbohatch">Daria Bohatchuk</a> &amp; <a href="https://profile.intra.42.fr/users/ikarachy">Iryna Karachynetska</a></p>
	</div>
</body>
</html>