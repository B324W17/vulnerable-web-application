<?php
include "upload_index.php";

if( isset( $_POST[ "Upload" ] ) ) { 
	echo "<h3>Welcome </h3>";
	
	$file_name = $_FILES["uploaded"]["name"];
    $target_path = "uploads/" . $file_name;
    
    $file_array = explode(".", $file_name);
	$file_extension = strtolower($file_array[count($file_array) - 1]);
	$file_extensions = array("jpeg", "png", "jpg");

	switch ($_COOKIE["security_level"])
	{
		case "0";
		if(in_array($file_extension, $file_extensions))
		{
			if(move_uploaded_file($_FILES["uploaded"]["tmp_name"], $target_path) ) { 
			echo '<pre>Your file was uploaded.</pre>'; 
			} else { 
				echo "<pre>Sorry, try again.</pre>";
            } 
        }else {
            echo "<pre>Sorry, invalid file.</pre>";
        }
        break;
        case "1";
        break;
        case"2";
        break;



    }    
} 
?> 