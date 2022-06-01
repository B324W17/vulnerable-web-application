<?php

header("Cache-Control: must-revalidate,post-check=0,pre-check=0");
header("Cache-Control:private");

// Destroys the session 
$_SESSION = array();
if(isset($_SESSION["login"]))
{
	$_SESSION["login"]=false;
	$_SESSION["password"]=false;
	session_destroy();
}


header("Location: login.php");
?>