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
				<li class="active">Exercise 3</li>

			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<!--/.row-->
			<div class="col-md-12">
				<div class="divider"></div>
				<div class="panel panel-primary">
					<div class="panel-heading">Take a small bite!
						
					</div>
					<div class="panel-body">
					<p></p>
						<p><span class="glyphicon glyphicon-hand-right"></span> <b>Task: </b> Display the PHP installation information file.</p>
						<p><span class="glyphicon glyphicon-hand-right"></span> <b>Spoiler: </b> Inject the code in the User-agent field using Burp Intruder.</p>

						<p><span class="glyphicon glyphicon-hand-right"></span> <b>Elaboration: </b>The logs we are looking to inject into are simply the <em>Apache access logs</em>. Web Server requests are stored in this file. Obviously being that requests are stored in an access log by Apache, specially crafted requests can Poison the Apache access logs. What is meant by poison? Fill the logs with PHP Code (which is not meant to be in the logs) which can be executed if a File Inclusion (or other vulnerability) is exploited.</p>

						<p><span class="glyphicon glyphicon-hand-right"></span> Find out where the log files are stored.</p>

						<p>1. You can try looking for logs in different paths; these paths are the default paths for logs for different webserver versions.</p>
						<p>2. To save time, you can use burp intruder to brute-force for log files. When you notice a change in the content length or response time, you have probably found log files.</p>
						<p>3. If you are not able to find the log files, and they are not located inside the default path, we can try looking for them in <em>/proc/self/cmdline</em> or <em>/proc/self/fd</em>. The <em>/proc/self/cmdline</em> file can contain paths to apache configuration file, which would contain the path to the log file.</p>

						<p><span class="glyphicon glyphicon-hand-right"></span> Test if you can inject PHP code in the log files you have just found which will complete your task for this level.</p>

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