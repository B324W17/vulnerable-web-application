<?php 
include 'header.php';
include 'security_level.php';
include 'side_bar.php';
include 'footer.php'; 
?>

<body>	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li>
					<a href="index.php"><em class="fa fa-home"></em></a>
				</li>
				<li>
					<a href="xss_index.php">XSS</a>
				</li>
				<li>
					<a href="xss_reflected_index.php">Reflected XSS</a>
				</li>
				<li class="active">Exercise 1</li>
			</ol>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<div class="divider"></div>
				<div class="panel panel-primary">
					<div class="panel-heading">Take a small bite!</div>
					<div class="panel-body">
						<p><span class="glyphicon glyphicon-hand-right"></span> 
							<b>Task:</b> Get the cookies. </p>
						<p><span class="glyphicon glyphicon-hand-right"></span>
							<b>Spoiler:</b> Try it with JavaScript input.<p><hr>
						<p>
							<b>Low:</b> In the real-world penetration testing, you won't have access to the underlying code for performing a source code review. In this case, you can inject the payload <em>'"<>();[]{}XSS</em> and see how the page returns. From the source, you can see that no escaping is being performed. <br>	
						</p><hr>
						<p>
							<b>Medium:</b> Are things getting hard? No worries! The code is simply using the <em>str_replace</em> function to strip out "script" tags before it's reflected back, a poor approach to security "blacklists". Since there are a huge number of ways to inject JavaScript code in an input, filters based upon blacklists have constantly failed.
						</p><hr>
						<p>
							<b>High:</b> This level is using special function to filter out the input before it is reflected back. Look into latest PHP version tutorials to better understand the special function.
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