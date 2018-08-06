<?php
function users()
{
	$conn = mysqli_connect("localhost", "root", "dolcemilk", "rush0");
	echo "<pre>";
	if (mysqli_connect_errno())
 	 echo "Failed to connect to MySQL: " . mysqli_connect_error();
	$sql = "SELECT * FROM users";
	$req = mysqli_query($conn, $sql);
	$result = mysqli_fetch_all($req, MYSQLI_ASSOC);
	foreach ($result as $key)
	{
		echo($key['id_users'] . " " . $key['login'] . "|");
	}
}

function del_user($id)
{
	$conn = mysqli_connect("localhost", "root", "dolcemilk", "rush0");
	$sql = "DELETE FROM users WHERE id_users = $id";
	$req = mysqli_query($conn, $sql);
}
users();
del_user();
?>



