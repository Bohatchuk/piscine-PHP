<?php
session_start();
include 'proverka.php';
$conn = mysqli_connect("localhost", "root", "dolcemilk", "rush0");
if (!$_POST['name'] || !$_POST['price'] || !$_POST['category'])
	header("Location: admin.php");

$id_prod = $_POST['id_prod'];
$name = $_POST['name'];
$price = $_POST['price'];
$category = $_POST['category'];
$descr = $_POST['description'];
$sql = "INSERT INTO products(id_prod, name, price, categories, descr) VALUES ('$id_prod', '$name', '$price', '$category', '$descr')";
check($conn, $sql);

?>