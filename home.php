

<html>
   
   <head>
      <title>Tema finala</title>    
	  <link rel="stylesheet" href="style.css">
   </head>
   
<body>
      
      <h2>Tema finala LS - Luca Maria Cezara</h2>
	  Correct username and password.
	  Click here to <a href = "logout.php" tite = "Logout">logout</a>.
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

	<div class="buttons">
	<a href="map.html" class="buttonOne">Harta exemple markere</a>
	<a href="map2.html" class="buttonTwo">Harta date JSON & CSV</a>
	</div>
</body>
	  