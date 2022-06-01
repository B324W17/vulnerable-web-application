<?php include 'includes.php';?>

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
				<li class="active">Exercise 4</li>
			</ol>
		</div>
		
		<div class="row">
			<div class="col-lg-12">
				
			</div>
		</div>
		
		<div class="row">
			<!--/.row-->
			<div class="col-md-12">
				<div class="divider"></div>
				<div class="panel panel-primary">
					<div class="panel-heading">Take a small bite!
						
					</div>
					<div class="panel-body">
						<p><span class="glyphicon glyphicon-hand-right"></span> <b>Task:</b> Read the configuration file of your sql server. </p>
						
						<p><span class="glyphicon glyphicon-hand-right"></span> 
						<b>Elaboration: </b>Assume that you are in a situation where you have no access to <em>/proc/self/environ</em> log files, can’t use <em>php://input</em>, or have no existing image uploaded that you can include and cause your commands to be executed. <br>
						In this scenario, you can use the php://filters to read the source code of the files you wish to read, and in most of the cases, we also try finding the configuration file that contains database details. Additionally, if the configuration file allows remote access to the sql server, we can simply connect to it and start manipulating things.</p>
						
						<p><span class="glyphicon glyphicon-hand-right"></span> <b>Note: </b>For this trick to work, you should have PHP version 5 or higher, since the php filter was introduced in that version.</p>
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