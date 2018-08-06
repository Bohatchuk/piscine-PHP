<?php
session_start();
?>

<html>
<head>
	<meta charset="utf-8">
	<title>User Management</title>
	<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
		<div id="actions"><p>Юзер менеджмент</p>
			
		<label>Введите ID пользователя: <br />
			<?php
					$conn = mysqli_connect("localhost", "root", "dolcemilk", "rush0");
	echo "<pre>";
	if (mysqli_connect_errno())
 	 echo "Failed to connect to MySQL: " . mysqli_connect_error();
	$sql = "SELECT * FROM users";
	$req = mysqli_query($conn, $sql);
	$result = mysqli_fetch_all($req, MYSQLI_ASSOC);
	foreach ($result as $key)
	{
		echo($key['id_users'] . " " . $key['login'] . "|");

	}
			?>		
		<form  id="form" method="post" action="delete_user.php">
		<input type="text" name="login" placeholder="ID" value=""/></label><br />
		
			<input id="submit" type="submit" value="Удалить пользователя"/>
		</form>
		<form  id="form" method="post" action="make_admin.php">
			<input id="submit" type="submit" value="Назначить админом"/>
		</form>
		<form  id="form" method="post" action="make_user.php">
			<input id="submit" type="submit" value="Сделать обычным пользователем"/>
		</form>
		</div>
	
	<div id="clear"></div>
		<div id="footer">
			<p>Copyright &copy; lollipop.com 2018 All Rights Reserved<br />
			Design by <a href="https://profile.intra.42.fr/users/dbohatch">Daria Bohatchuk</a> &amp; <a href="https://profile.intra.42.fr/users/ikarachy">Iryna Karachynetska</a></p>
	</div>
</body>
</html>




