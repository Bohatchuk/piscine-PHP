<?php
session_start();
?>

<html>

<head>
	<meta charset="utf-8">
	<title>Sweets Shop "Lollipop"</title>
	<link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body>

	<div id="landing">
<?php
	include("header.php");
?>
	
	<div id="centre_field">
		<table>
		<tr>
			<td>
				<form id="form" method="POST" action="registration.php">
					<div id="actions"><h2>Registration:</h2></div>
					<label>Login:
						<input type="text" name="login" placeholder="Enter login" value=""/></label><br />
					<label>E-mail:
						<input type="text" name="email" placeholder="Enter e-mail" value=""/></label><br />
					<label>Password: 
						<input type="text" name="password" placeholder="Enter password" value=""/></label><br />
					<label>Password: 
						<input type="text" name="password1" placeholder="Re-enter password" value=""/></label><br />
					<input id="submit" type="submit" value="Register"/>
				</form>
			</td>
		</tr>
	</table>

	</div>
		<div id="clear"></div>
		<div id="footer">
			<p>Copyright &copy; lollipop.com 2018 All Rights Reserved<br />
			Design by <a href="https://profile.intra.42.fr/users/dbohatch">Daria Bohatchuk</a> &amp; <a href="https://profile.intra.42.fr/users/ikarachy">Iryna Karachynetska</a></p>
	</div>
	</div> 


</body>
</html>
