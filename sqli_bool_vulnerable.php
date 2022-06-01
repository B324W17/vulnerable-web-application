<?php

	if(isset($_GET["search"]))
	{
		$search=$_GET["search"];
		$sql="SELECT * FROM books WHERE title ='".sqli($search)."'";
		
		$result=mysqli_query($connection, $sql);

		if(!$result)
		{
			 die('<div class="panel-body">Are you really trying to hack me? TRY HARDER! Correct your syntax! </div>'); 
		
		}

		if(mysqli_num_rows($result) != 0)
		{
			 echo '<div class="panel-body"><strong>Yay!</strong> We have the book in our bookstore.</div>';
		}

		else 
		{

			echo '<div class="panel-body"><strong>Whoops!</strong> We don\'t have the book in our bookstore.</div>'; 
		}
	}
mysqli_close($connection);
								