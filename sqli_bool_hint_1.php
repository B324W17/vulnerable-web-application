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
				<li class="active">Exercise 1</li>

			</ol>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<div class="divider"></div>
				<div class="panel panel-primary">
					<div class="panel-heading">Take a small bite!</div>
					<div class="panel-body">
						<p><span class="glyphicon glyphicon-hand-right"></span> <b>Task:</b> Who is the current DB user? </p>
						<p><span class="glyphicon glyphicon-hand-right"></span> <b>Spoiler:</b> You can use the <em>substring function</em> to enumerate one character at a time. Test first if it does return true and false statements correctly with <em>' OR '1'='1</em> or <em>' OR '1'='2</em><p>
						
						<p><span class="glyphicon glyphicon-hand-right"></span> <b>Elaboration:</b> 
						You will use <b>true and false statements</b> to enumerate the database user. However, we can enumerate only one character at a time, which is why it takes so much time for exploiting a blind SQL injection. </p>
						<hr>

						<p>
							<b>Low:</b> There is no filtering or escaping used on this level. Feel free to use anything you like. <br> 
							<em>' OR SUBSTRING(user(),1,1)='r';--+</em> <em>' OR SUBSTRING(user(),2,1)='o';--+</em> Use this to specify in the URL. <br>
							If you want to insert from the input try this one <em>' OR SUBSTRING(user(),1,1)='r</em>
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