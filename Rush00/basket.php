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
			session_start();
			$conn = mysqli_connect("localhost", "root", "dolcemilk", "rush0");
			if (mysqli_connect_errno())
 	 			echo "Failed to connect to MySQL: " . mysqli_connect_error();
			$sql = "SELECT * FROM cart";
			$req1 = mysqli_query($conn, $sql);
			$result1 = mysqli_fetch_all($req1, MYSQLI_ASSOC);
			$req2 = mysqli_query($conn, $sql);
		 	$result2 = mysqli_fetch_all($req2, MYSQLI_ASSOC);
		 ?>
		 <div id="basket_list">
		 <?php
			foreach ($result1 as $key) {
				echo($key['name']."------------".$key['price'].  "$".    "<br />");
			}
		?></div>
		<div id="total_payment">
		<?php
			$res = 0;
			foreach ($result2 as $key) {
				$res = $key['price'] + $res;
			}
				echo ("$res"."   $"."<br />");
		?></div>
		<form id="form" method="POST" action="make_order.php">
			<input id="submit" type="submit" value="Make order"/>
		</form>
		<div id="clear"></div>
		<div id="footer">
			<p>Copyright &copy; lollipop.com 2018 All Rights Reserved<br />
			Design by <a href="https://profile.intra.42.fr/users/dbohatch">Daria Bohatchuk</a> &amp; <a href="https://profile.intra.42.fr/users/ikarachy">Iryna Karachynetska</a></p>
		</div>
	</div> 


</body>
</html>