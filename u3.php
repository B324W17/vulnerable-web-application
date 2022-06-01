<?php
include "upload_index.php";

if( isset( $_POST[ "Upload" ] ) )
{ 
	echo "<h3>Welcome </h3>";
		
	$file_name = $_FILES["uploaded"]["name"];
	$target_path = "uploads/" . $file_name;

	$uploaded_name = $_FILES[ "uploaded"] ["name"] ;
	$uploaded_type = $_FILES[ "uploaded"] ["type"] ;
	$uploaded_size = $_FILES[ "uploaded"] ["size"] ;
	$uploaded_tmp = $_FILES["uploaded"] ["tmp_name"];

	switch ($_COOKIE["security_level"])
		{
			case "0";
			if(($uploaded_type == "image/jpeg" || $uploaded_type == "image/png" || $uploaded_type == "image/jpg") &&
	        ( $uploaded_size < 100000 ))
			{
				if(move_uploaded_file($_FILES["uploaded"]["tmp_name"], $target_path)) { 
				echo '<pre>Your file was uploaded.</pre>'; 
				} else { 
					echo "<pre>Sorry, try again.</pre>";
	            } 
	        }else {
	            echo "<pre>Sorry, invalid file.</pre>";
	        }
	        break;

	        case "1";
	        if(($uploaded_type == "image/jpeg" || $uploaded_type == "image/png" || $uploaded_type == "image/jpg")  &&
		     getimagesize( $uploaded_tmp ))
			{
				if(move_uploaded_file($_FILES["uploaded"]["tmp_name"], $target_path) ){ 
				echo '<pre>Your file was uploaded.</pre>'; 
				} else { 
					echo "<pre>Sorry, try again.</pre>";
	            } 
	        }else{
	            echo "<pre>Sorry, invalid file.</pre>";
	        }
	        break;

	        case"2";
	        break;
	}
} 
?>

		