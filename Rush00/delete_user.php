<?php

 
$name = $_POST['login'];

$conn = mysqli_connect("localhost", "root", "dolcemilk", "rush0");
$sql = "DELETE FROM users WHERE id_users = ".$name;
$req = mysqli_query($conn, $sql);

?>
