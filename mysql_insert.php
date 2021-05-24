<?php

$conn=mysqli_connect("localhost", "root", "") or die(mysqli_error());
mysqli_select_db($conn, "locatii2");

$sql_insert="INSERT INTO coord (latitudine, longitudine) VALUES ('123', '456')";

$retval = mysqli_query($conn, $sql_insert);
if(! $retval )
{
  die('Could not insert data: ' . mysqli_error());
}
echo "Data inserted successfully\n";

?>