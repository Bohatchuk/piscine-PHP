<?php
session_start();


if (!$_POST['login'] || !$_POST['password'])
{
	header("Location: registration_form.php");
	return;
}
$conn = mysqli_connect("localhost", "root", "dolcemilk", "rush0");
$sql = "SELECT login, password FROM users";
$req = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($req, MYSQLI_ASSOC);
foreach ($users as $row) {
        if ($row['login'] == $_POST['login'])
		{
			
			if ($row['password'] == hash("whirlpool", $_POST['password']))
			{
				$_SESSION["logged_in_user"] = "";
				$_SESSION["logged_in_user"] = $_POST["login"];
				header("Location: index.php");
				return(1);
			}
			 header('Location: sign_in.php?error=Incorrect pasword');
			return(0);
		}
    }
    header('Location: sign_in.php?error=User not found');
   	return(0);
?>
