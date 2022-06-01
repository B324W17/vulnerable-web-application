<?php include 'includes.php'; ?>

<body>	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">SQLi</li>
			</ol>
		</div>
		
		<div class="row">
			<div class="col-lg-12">
					
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-6">
				<div class="divider"></div>
				<div class="panel panel-primary">
					<div class="panel-heading">Union-based SQLi
						<a href="sqli_union.php">
							<span class="pull-right ">
								<button type="button" class="btn btn-md btn-success">Exercise Here</button>
							</span>
						</a>
					</div>
					<div class="panel-body">
						<p>This is the most common type of SQL injection. It comes from the class of <b>inband SQL injection</b>, and this type of attack utilizes the use of a UNION statement, which is the combination of two select statements, to extract information from the database.</p>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="divider"></div>
				<div class="panel panel-primary">
					<div class="panel-heading">Error-based SQLi
						<a href="sqli_error.php">
							<span class="pull-right ">
								<button type="button" class="btn btn-md btn-success">Exercise Here</button>
							</span>
						</a>
					</div>
					<div class="panel-body">
							<p>	In this technique, we cause an application <b>to throw an error</b> 
							to extract the database. Typically, you ask a question to the database, and it returns with an error 
							containing the information you asked for.Typically, you ask a question to the database, and it returns with an error 
							containing the information you asked for.
						</p>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="divider"></div>
				<div class="panel panel-primary">
					<div class="panel-heading">Boolean-based SQLi
						<a href="sqli_bool_ex.php">
							<span class="pull-right ">
								<button type="button" class="btn btn-md btn-success">Exercise Here</button>
							</span>
						</a>
					</div>
					<div class="panel-body">
						<p>In a Boolean-based SQL injection attack, we simply ask questions from the database in the form 
						of “true or false” statements. A true statement returns a different result than a false statement. This is one example of <b>Blind SQL injection</b> attacks.</p>
						
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="divider"></div>
				<div class="panel panel-primary">
					<div class="panel-heading">Time-based SQLi
						<a href="sqli_time.php">
							<span class="pull-right ">
								<button type="button" class="btn btn-md btn-success">Exercise Here</button>
							</span>
						</a>
					</div>
					<div class="panel-body">
						<p>Let’s assume that there is no distinction between the results of 
						true and false statements and that there are absolutely no errors returned from the database. Thus this type of SQL injection attack is also known as a <b>totally blind SQL injection</b> attack.</p>

					</div>
				</div>
			</div>
		</div>	
	</div>
		<div class="col-sm-12">
		<p class="back-link">Sandwich Vulnerable Web app (SVWA) by <a href="#">SecurityGeeks</a></p>
	</div>
