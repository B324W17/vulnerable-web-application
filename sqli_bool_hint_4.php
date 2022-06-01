<?php include 'includes.php'; ?>

<body>	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li><a href="sqli_index.php">SQLi</a></li>
				<li><a href="sqli_bool_ex.php">Boolean-based SQLi</a></li>
				<li class="active">Exercise 4</li>

			</ol>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<div class="divider"></div>
				<div class="panel panel-primary">
					<div class="panel-heading">Take a small bite!</div>
					<div class="panel-body">
						<p><span class="glyphicon glyphicon-hand-right"></span> <b>Task:</b> Extract the contents of the column you found in exercise 3 of database SVWA. </p>
						<p><span class="glyphicon glyphicon-hand-right"></span> <b>Spoiler:</b> Use <em>SELECT </em> statement to complete your task. You will be querying the first character of the content you are trying to disclose.<p>
						
						<p><span class="glyphicon glyphicon-hand-right"></span> <b>Elaboration:</b> 
						The key here is the distinction between a true and a false statement. You can use either AND or OR statements. You are familiar with how the True and False statements are displayed to you by now.</p>
						<p><b>Note: </b>This is a time consuming task when dealing with a large database. </p><hr>
						<p>
							<b>Low:</b>  There is no filtering or escaping used on this level. Feel free to use anything you like. <br>	<em>' OR (SELECT mid(user_name,1,1) from svwa.users limit 0,1)='a';--+</em> Use this to specify in the URL.<br>
							If you want to insert from the input try this one <em>' OR (SELECT mid(user_name,1,1) from svwa.users limit 0,1)='a</em>	
						</p><hr>
						<p>
							<b>Medium:</b> Insert a single quote and if there is no error coming to you, then it is using a special function that returns a string with backslashes in front of predefined characters. Try encoding mechanisms.
						</p><hr>
						<p>
							<b>High:</b> Bypass mysqli_real_escape_string() function.
						</p><hr>
						<p><span class="glyphicon glyphicon-hand-right"></span>
							<b> Links: </b> <!--<a href="https://www.youtube.com/watch?v=GLPgq0WLkVY">Help!</a>-->
							<a href="#">Help!</a>
						</p>
					</div>
				</div>
			</div>
		</div>	
	</div>	
	<div class="col-sm-12">
		<p class="back-link">Sandwich Vulnerable Web app (SVWA) by <a href="#">SecurityGeeks</a></p>
	</div>