<?php 
include 'csrf_index.php';
include 'connect.php';
//include 'functions.php';
?>

<?php

	if( isset( $_GET[ 'Change' ] ) ) {
		echo "<h4>Welcome</h4>";

		$login = $_SESSION["login"];
		$p_new  = $_GET[ 'password_new' ];
		$p_conf = $_GET[ 'password_conf' ];

        switch ($_COOKIE["security_level"])
        {
        	case '0':
        		if( $p_new == $p_conf )
        		{
					$sql = "UPDATE users SET password = '$p_new' WHERE user_name = '" . $login . "';";
					$result= mysqli_query($connection, $sql);
					if($result)
					{
						echo "<pre>Password Changed.</pre>";
					}
				}
				else {
				       echo "<pre>Passwords did not match.</pre>";
				}
        		break;
        	
        	case '1':
                generateSessionToken();

        		checkToken( $_REQUEST[ 'user_token' ], $_SESSION[ 'session_token' ], 'index.php' );
        		if( $p_new == $p_conf )
        		{
					$sql = "UPDATE users SET password = '$p_new' WHERE user_name = '" . $login . "';";
					$result= mysqli_query($connection, $sql);
					if($result)
					{
						echo "<pre>Password Changed.</pre>";
					}
				}
				else {
				       echo "<pre>Passwords did not match.</pre>";
				}
        		break;
        	case "2";
        	    if( isset( $_GET[ 'password_curr' ] ) )
        	    {
        	    	$p_curr  = $_GET[ 'password_curr' ];
        	    	$sql = "SELECT password FROM users WHERE user_name = '" . $login . "' AND password = '" . $p_curr . "'";
        	    	$result = mysqli_query($connection, $sql);
        	    	if($result)
        	    	{
        	    		$sql = "UPDATE users SET password = '$p_new' WHERE user_name = '" . $login . "';";
        	    		 $result = mysqli_query($connection, $sql);
        	    		 if($result)
        	    		 {
        	    		 	echo "<pre>Password changed.</pre>";
        	    		 }
        	    	}
        	    	else{
        	    		 echo"Current password is not valid!";
        	    	}
        	    }else{
        	    	echo"Current password needed!";
        	    }
        	    break;
        }	
}
?>

																		
	