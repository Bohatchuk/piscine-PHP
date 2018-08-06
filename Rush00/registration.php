<?php
include "proverka.php";

$conn = mysqli_connect("localhost", "root", "dolcemilk", "rush0");
if (!$_POST['login'] || !$_POST['email'] || !$_POST['password'] || !$_POST['password1'])
{
	header("Location: registration_form.php");
	return;
}

if ($_POST['password'] != $_POST['password1'])
{
	header("Location: registration_form.php");
	return;
}


$sql = "SELECT * FROM users";
$req = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($req, MYSQLI_ASSOC);

foreach ($users as $user)
{
	if ($user['login'] == $_POST['login'])
	{
		header("Location: registration_form.php?error=user_exist");
		return;
	}
}
$password = hash('whirlpool', $_POST['password']);
$sql = "INSERT INTO users (login, email, password) VALUES ('$_POST[login]', '$_POST[email]', '$password')";
$req = mysqli_query($conn, $sql);
header("Location: index.php");
?>
