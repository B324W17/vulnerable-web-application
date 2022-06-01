<?php 
include "upload_index.php";

if( isset( $_POST[ "Upload" ] ) ) { 
	echo "<h3>Welcome </h3>";
		
	$file_name = $_FILES["uploaded"]["name"];
    $target_path = "uploads/" . $file_name;
    
	$uploaded_size = $_FILES[ "uploaded"] ["size"] ;
	$uploaded_tmp = $_FILES["uploaded"] ["tmp_name"];

    switch ($_COOKIE["security_level"])
		{
			case "0";
			if ( $uploaded_size < 50 ) 
			{ 

				if(move_uploaded_file($_FILES["uploaded"]["tmp_name"], $target_path) ) 
				{ 
					echo '<pre>Your image was uploaded.</pre>'; 
				} else { 
						echo "<pre>Sorry, try again.</pre>";
		            } 
		    } else{
		        echo "<pre>Sorry, Your file is too large.</pre>";
		    }
		    break;
		    case "1";
		    break;
		    case"2";
		    break;
}
} 

?> 
																		
			