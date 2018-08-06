<?php

 
$name = $_POST['ID'];

$conn = mysqli_connect("localhost", "root", "dolcemilk", "rush0");
$sql = "DELETE FROM products WHERE id_prod = ".$name;
$req = mysqli_query($conn, $sql);

?>
