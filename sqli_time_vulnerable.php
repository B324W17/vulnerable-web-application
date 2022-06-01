<?php

	if(isset($_GET["search"]))
	{
		$search=$_GET["search"];
		$sql="SELECT * FROM books WHERE title ='".sqli($search)."'";
		
		$result=mysqli_query($connection, $sql);

		if(!$result)
		{
			 die('<div class="panel-body"></div>'); 
		
		}

		if(mysqli_num_rows($result) != 0)
		{
			 echo '<div class="panel-body"></div>';
		}

		else 
		{

			echo '<div class="panel-body"></div>'; 
		}
	}
mysqli_close($connection);
								