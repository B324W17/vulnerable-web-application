<?php
include "upload_index.php";

if( isset( $_POST[ "Upload" ] ) )
 { 
 	echo "<h3>Welcome </h3>";

	$file_name = $_FILES["uploaded"]["name"];
    $target_path = "uploads/" . $file_name;
                    
	$file_array = explode(".", $file_name);
	$file_extension = ($file_array[count($file_array) - 1]);
	$file_extensions  = array("asp", "php");
	$file_extensions_1  = array("asp", "php", "php3", "php4", "php5", "phtml");



	switch ($_COOKIE["security_level"]) 
	{
		case "0"; 

				if(! in_array($file_extension, $file_extensions))
				{
					if(move_uploaded_file($_FILES["uploaded"]["tmp_name"], $target_path));
			              {
			              	echo "File uploaded successfully!";
			              }
				}else{
					echo "Sorry, invalid file type.";
				}            
            
           break;
           case "1";
                 
                 if(! in_array($file_extension, $file_extensions_1))
				{
					if(move_uploaded_file($_FILES["uploaded"]["tmp_name"], $target_path));
			              {
			              	echo "File uploaded successfully!";
			              }
				}else{
					echo "Sorry, invalid file type.";
				}            
            
           break;
           case "2";
	            if(! in_array(strtolower($file_extension), $file_extensions_1))
					{
						if(move_uploaded_file($_FILES["uploaded"]["tmp_name"], $target_path));
				              {
				              	echo "File uploaded successfully!";
				              }
					}else{
						echo "Sorry, invalid file type.";
					}            
           break;
    }
 }
?>   