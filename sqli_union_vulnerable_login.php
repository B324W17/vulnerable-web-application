<?php 
					if(isset($_POST["login"]))
					{
						$username=$_POST["username"];
						$username=sqli($username);

						$password=$_POST["password"];
						$password=sqli($password);

						$sql="SELECT * FROM users WHERE user_name = '".$username."'AND password='".$password."'";
						$result=mysqli_query($connection, $sql);
						if(!$result)
						{
							die("Error: ".mysqli_error($connection));
						}
						else
						{
							$row=mysqli_fetch_array($result);
							if($row["user_name"])
							{
								echo "Welcome <b>".ucwords($row["user_name"])."</b>";
								echo "</br>Your password: <b>".ucwords($row["password"])."</b>";
							}
							else
							{
								echo "Invalid credentials.";
							}
						}
						mysqli_close($connection);
					}
					