<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Tabel din DB</title>
</head>
<body>
	<table>
		<tr>
			<th>ID</th>
			<th>Latitudine</th>
			<th>Longitudine</th>
		</tr>

		<?php

			$conn=mysqli_connect("localhost", "root", "") or die(mysqli_error());
			mysqli_select_db($conn, "locatii2");

			$sql_read = "SELECT * FROM coord";

			$result = mysqli_query($conn, $sql_read);
			if(! $result )
			{
			die('Could not read data: ' . mysqli_error());
			}

			while($row = mysqli_fetch_array($result)) {
				$id = $row['ID'];
				$lat = $row['Latitudine'];
				$long = $row['Longitudine'];
				// echo $id . ' ' . $lat . ' ' . $long . "<br>\n";
				echo "<tr><td>". $id ."</td><td>". $lat ."</td><td>". $long ."</td></tr>";
			}
			echo "</table>"
?>

	</table>
</body>
</html>