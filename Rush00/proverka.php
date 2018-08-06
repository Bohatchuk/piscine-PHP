<?php
function check($conn, $sql)
{
	if (mysqli_query($conn, $sql))
	{
		echo "Success" . "<br>";
		return 1;
	}	
	else
	{
		echo "Error" . mysqli_error($conn) . "<br>";
		return 0;
	}

}
?>