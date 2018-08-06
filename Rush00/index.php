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
	
	<div id="centre_field"">
		<h2>Welcome to <strong>our sweets shop "Lollipop" !</strong></h2>
			<div id="centre_text">
				<p><strong><a href="index.php">Sweets Shop "Lollipop"</a></strong> is the best sweets shop ever!<br /> We are not just selling sweets, we are selling a memory. </p>
				<p>&nbsp;</p>
				
				<p>You can buy in our shop different candies, cookies, cupcakes, donats and marshmallows.</p>
				<p>&nbsp;</p>
				
				<p>But first of all you have to <a href="registration.php">register</a> or <a href="sign_in.php">sign in</a> before doing your shopping.</p>
				<p>&nbsp;</p>
				
				<p><a href="basket.php">Check in your basket!</a></p>
				<p>&nbsp;</p>
    		</div>
    				<?php 
$conn = mysqli_connect("localhost", "root", "dolcemilk", "rush0");
$sql = "SELECT * FROM products WHERE categories= 'cakes' ";
$req = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($req, MYSQLI_ASSOC);
foreach($result as $key): ?>
<div style="display: inline-block;">
<h4><?php echo($key['name']) ?></h4></div>
<div style="display: inline-block;"><img src="<?php echo $key['image'] ?>"; alt="Smiley face" height="100" width="100"></div>
<p><?php echo $key['price'] . "$.     ". "                " . $key['descr']?></p>
<form action="add_to_cart.php" enctype="multipart/form-data" method="post">
<input type="text" name="item"  hidden value= <?php echo($key['id_prod']); ?>
<p align="left" ><input type="submit" id="add_to_cart" name="submit_add" value="Add to cart"></p>
</form>

<?php endforeach; 
?>
	</div>
		<div id="clear"></div>
		<div id="footer">
			<p>Copyright &copy; lollipop.com 2018 All Rights Reserved<br />
			Design by <a href="https://profile.intra.42.fr/users/dbohatch">Daria Bohatchuk</a> &amp; <a href="https://profile.intra.42.fr/users/ikarachy">Iryna Karachynetska</a></p>
	</div>
	</div> 


</body>
</html>