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
		<?php 
$conn = mysqli_connect("localhost", "root", "dolcemilk", "rush0");
$sql = "SELECT * FROM products WHERE categories= 'cakes' ";
$req = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($req, MYSQLI_ASSOC);
foreach($result as $key): ?>
<div style="display: inline-block;">
<h4><?php echo($key['name']) ?></h4></div>
<div style="display: inline-block;"><img src="<?php echo $key['image'] ?>"; alt="Smiley face" height="100" width="100"></div>
<p><?php echo $key['price'] . " " . $key['descr']?></p>
<div style="display: inline-block" onclick="add()"><button>Add to bascket</button></div><br>

<?php endforeach; 
?>

	
	<div id="centre_field">
		<table>
		<tr>
			<td>
				
			</td>
			<td>

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

