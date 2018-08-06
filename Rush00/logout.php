<?php
session_start();
$_SESSION['logged_in_user'] = "";
header("Location: index.php");
?>