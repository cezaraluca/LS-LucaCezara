<?php

$conn=mysqli_connect("localhost", "root", "") or die(mysqli_error());
mysqli_select_db($conn, "locatii2");

$sql_create = "CREATE TABLE coord
(
ID int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(ID),
Latitudine varchar(20),
Longitudine varchar(20)
)
";

$retval = mysqli_query($conn, $sql_create);
if(! $retval )
{
  die('Could not create table: ' . mysqli_error());
}
echo "Table created successfully\n";


?>