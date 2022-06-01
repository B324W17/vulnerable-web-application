<?php 
include 'csrf_index_2.php';
include 'connect.php';
//include 'functions.php';
?>

<?php

	if( isset( $_POST[ 'Change' ] ) ) {
		echo "<h4>Welcome</h4>";

		$login = $_SESSION["login"];
		$p_new  = $_POST[ 'password_new' ];
		$p_conf = $_POST[ 'password_conf' ];

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
        }
}
?>

																		
	