	<?php 
							if(isset($_POST["user"]))
							{
								$user = $_POST["user"];
								$user = sqli($user);

								$sql = "SELECT * FROM users WHERE id=$user";

								$result = mysqli_query($connection, $sql);

								if(!$result)
								{
									die("Error: ".mysqli_error($connection));
								}
								$row = mysqli_fetch_array($result);
								
								if(mysqli_num_rows($result)!= 0)
								{

									echo "Welcome ".ucwords($row["user_name"]);
									
								}
								else
								{
									echo "User doesn't exist.";
								}
							}
							