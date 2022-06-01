<?php

$server="localhost";
$username="root";
$password="";
$database="svwa";

$connection=mysqli_connect($server, $username, $password, $database);

if(!$connection){
	die(mysqli_error());
}

//mysql_close($connection);

?>