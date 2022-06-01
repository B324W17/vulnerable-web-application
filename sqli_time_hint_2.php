<?php include 'includes.php'; ?>

<body>	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li><a href="sqli_index.php">SQLi</a></li>
				<li><a href="sqli_time.php">Time-based SQLi</a></li>
				<li class="active">Exercise 2</li>

			</ol>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<div class="divider"></div>
				<div class="panel panel-primary">
					<div class="panel-heading">Take a small bite!</div>
					<div class="panel-body">
						<p><span class="glyphicon glyphicon-hand-right"></span> <b>Task:</b> </p>
						<p><span class="glyphicon glyphicon-hand-right"></span> <b>Spoiler:</b> Use the same syntax as what you used for Boolean-based sql injection; however, add "if" clause and a sleep query.<p>
						
						<p><span class="glyphicon glyphicon-hand-right"></span> <b>Elaboration:</b> 
						Enumerate one character at a time. The query simply asks the database if the first character of the db_user is equal to the single character of your choice and to delay the response for 5s.  </p><hr>
						<p>
							<b>Low:</b> <br>	
						</p><hr>
						<p>
							<b>Medium:</b>
						</p><hr>
						<p>
							<b>High:</b> 
						</p><hr>
						<p><span class="glyphicon glyphicon-hand-right"></span>
							<b> Links: </b> <a href="https://www.google.com">Google Search</a>
						</p>
					</div>
				</div>
			</div>
		</div>	
	</div>	
	<div class="col-sm-12">
		<p class="back-link">Sandwich Vulnerable Web app (SVWA) by <a href="#">SecurityGeeks</a></p>
	</div>