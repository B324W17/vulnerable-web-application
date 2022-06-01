<?php
function xss($name)
{
	switch($_COOKIE["security_level"])
	{
		case "0":
			return $name;
			break;
		case "1":
			return str_replace('<script>','',$name);
			return preg_replace( '/<(.*)s(.*)c(.*)r(.*)i(.*)p(.*)t/i', '', $name );
			return addslashes($name);
			break;
		case "2":
			return htmlspecialchars($name);
			break;
		default:
		   return $name;
		   break;
	}
	return $name;
}
function sqli($check)
{
	include("connect.php");
	switch ($_COOKIE["security_level"]) 
	{
		case "0":
			return $check;
			break;
		case "1";
			return addslashes($check);
			break;
		case "2":
			return mysqli_real_escape_string($connection,$check);
			break;
		
		default:
			return $check;
			break;
	}
	return $check;
}




