<?php
include 'header.php';
include 'connect.php';

header("Cache-Control: must-revalidate,post-check=0,pre-check=0");
header("Cache-Control:private");



$message="";

if(count($_POST)>0)
{
        $login=$_POST["login"];
		$password=$_POST["password"];

		$sql="SELECT * FROM users WHERE user_name='".$login."' AND password = '".$password."'";

		$result= mysqli_query($connection, $sql);

		if(!$result)
		{
			die("Error: ".mysqli_error($connection));
		}
		else
		{
			$row=mysqli_fetch_array($result);

			if(is_array($row))
			{
				session_regenerate_id(true);//regenrate the session identifier everytime the user's access level changes

				$_SESSION["login"]= $row["user_name"];
				$_SESSION["password"] = $row["password"]; //storing session dataS
				//$_SESSION["counter"]=1000;
			}
			else
			{
				$message="<font color=\"red\">Invalid credentials!</font>";
			}
		}
}
if(isset($_SESSION["login"]))
{
	header("Location: index.php");
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

				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<form role="form" action="#" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Username" name="login" type="text">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" >
							</div>
							
							<button type="submit" name="form" value="submit" class="btn btn-primary">Login</button>
							<span class="pull-right "><button type="submit" name="register" value="submit" class="btn btn-default">Register</button></span></a>
							</fieldset>
					</form>
<?php
echo $message;
mysqli_close($connection);
 if(isset($_REQUEST["register"]))
   {
   		header("Location: register.php");
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
