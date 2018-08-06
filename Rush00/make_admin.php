<?php
$name = $_POST['login'];
$conn = mysqli_connect("localhost", "root", "dolcemilk", "rush0");
$sql = "UPDATE `users` SET `groups` = \'admin\' WHERE `users`.`$name`";
?>
