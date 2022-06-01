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
				<li class="active">Exercise 3</li>

			</ol>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<div class="divider"></div>
				<div class="panel panel-primary">
					<div class="panel-heading">Take a small bite!</div>
					<div class="panel-body">
						<p><span class="glyphicon glyphicon-hand-right"></span> <b>Task:</b> Guess the columns in the table you found in exercise 2 of database SVWA. </p>
						<p><span class="glyphicon glyphicon-hand-right"></span> <b>Spoiler:</b> Use <em>SUBSTRING</em> and <em>SELECT </em>to complete your task. The application will return <em>"Syntax error"</em> if the column name is incorrect.<p>
						
						<p><span class="glyphicon glyphicon-hand-right"></span> <b>Elaboration:</b> 
						The key here is the distinction between a true and a false statement. You can use either AND or OR statements.This a trial and error exercise and might be a lot of work. Check out SQLMAP for automated hacking. </p><hr>
						<p>
							<b>Low:</b> There is no filtering or escaping used on this level. Feel free to use anything you like. <br>	<em>' OR (SELECT substring(concat(1,column_name),1,1) from svwa.users limit 0,1)=1;--+</em> Use this to specify in the URL.<br>
							If you want to insert from the input try this one <em>' OR (SELECT substring(concat(1,column_name),1,1) from svwa.users limit 0,1)='1</em>	
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