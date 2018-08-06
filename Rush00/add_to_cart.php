<?php 
session_start();
if (empty($_SESSION["logged_in_user"])) {
	header("Location: index.php");
	die();
}
include ("proverka.php");

$tmp = ($_POST['item']);

$conn = mysqli_connect("localhost", "root", "dolcemilk", "rush0");
$sql = "SELECT * FROM products WHERE id_prod = '$tmp' ";
$req = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($req, MYSQLI_ASSOC);
$id = $result[0]['id_prod'];
$name = $result[0]['name'];
$price = $result[0]['price'];

$sql = "INSERT INTO cart (id_cart, name, price) VALUES ('$id', '$name', '$price')";
 if(check($conn, $sql) == 1)
 {
 	header("Location: sweets.php");
 }	

echo "<a href='http://localhost:8080/Rush0/index.php' target='_blank'>Thanks for bying</a>"
?>