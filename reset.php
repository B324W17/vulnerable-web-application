<?php
include 'connect.php';

$sql = "DELETE FROM comments";
$result = mysqli_query($connection, $sql);

if(!$result)
{
	echo '<div class="panel-body">';
	echo die("Error: ".mysqli_error($connection));
	echo '</div>';
}

header("Location: xss_stored_1.php");

mysqli_close($connection);
?>