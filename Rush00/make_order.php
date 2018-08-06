<?php
			include ("proverka.php");
			session_start();
			$conn = mysqli_connect("localhost", "root", "dolcemilk", "rush0");
			if (mysqli_connect_errno())
 	 			echo "Failed to connect to MySQL: " . mysqli_connect_error();
			$sql = "SELECT * FROM cart";
			$req = mysqli_query($conn, $sql);
			touch("order.txt");
			$fn = "order.txt";
			$fp = fopen($fn, 'a') or die ("Can't open");
			while ($row = mysqli_fetch_assoc($req)) {
				foreach ($row as $key) {
					fwrite($fp, $key['name'], $key['price']);
				}
			}
			fclose($fp);
			$sql = "DELETE FROM cart";
			$req = mysqli_query($conn, $sql);
			check($conn, $sql);
		 ?>