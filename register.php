<?php 
include 'header.php';
include 'connect.php';
include 'security_level.php';

$message="";
if(isset($_REQUEST["action"]))
{
	$login=$_REQUEST["username"];
	$password=$_REQUEST["password"];
	$password_conf=$_REQUEST["password_conf"];

	if($login == "" or $password == "")
	{
		$message="<font color=\"red\">Please enter all the fields!</font>";
	}
	else
	{
		if(preg_match("/^[a-z\d_]{2,20}$/i", $login) == false)
		{
			$message="<font color=\"red\">Please choose a valid login name!</font>";
		}
		else
		{
			if($password!=$password_conf)
			{
				$message="<font color=\"red\">The passwords don't match!</font>";
			}
			else
			{
				 $login = mysqli_real_escape_string($connection, $login);
                 $login = htmlspecialchars($login, ENT_QUOTES, "UTF-8");

                 $password = mysqli_real_escape_string($connection, $password);
                 //$password = hash("sha1", $password, false);

                 $sql="SELECT * FROM users WHERE user_name='".$login."'OR password='".$password."'";
                 $result= mysqli_query($connection, $sql);

                 if(!$result)
                 {
                 	die("Error: ".mysqli_error($connection));
                 }
                 else
                 {
                 	$row=mysqli_fetch_array($result);
                 	if(!$row)
                 	{
                 		$sql="INSERT INTO users (user_name,password) VALUES ('".$login."','".$password."')";
                 		$result=mysqli_query($connection,$sql);
                 		if(!$result)
                 		{
                 			die("Error: ".mysqli_error($connection));
                 		}
                 		$message="<font color=\"green\">User successfully created!</font>";
                 	}
                 	else
                 	{
                 		$message="<font color=\"red\">The username already exists!</font>";
                 	}
                 }
			}
		}
	}
}

?>
<body>
<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-primary">
				<div class="panel-heading"><em class="fa fa-bug"></em>&nbsp; SVWA</div>
				
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">New user</div>
				<div class="panel-body">
					<form action="<?php echo($_SERVER["SCRIPT_NAME"]);?>" method="post" role="form">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Username" name="username" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Confirm password" name="password_conf" type="password" value="">
							</div>
							
							<button type="submit" name="action" value="create" class="btn btn-default">Create</button>
							<span class="pull-right "><button type="submit" name="form" value="submit" class="btn btn-primary">Login</button><span class="pull-right "></span>
							</fieldset>
					</form>
					<?php

    echo $message;

   mysqli_close($connection);

   if(isset($_REQUEST["form"]))
   {
   		header("Location: login.php");
   }

    ?>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
