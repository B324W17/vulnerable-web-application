<?php 
include 'includes.php'; 
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
					<a href="xss_dom.php">DOM-based XSS</a>
				</li>
				<li class="active">Exercise 2</li>
			</ol>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<div class="divider"></div>
				<div class="panel panel-primary">
					<div class="panel-heading">Take a small bite!</div>
					<div class="panel-body">
						<p><span class="glyphicon glyphicon-hand-right"></span> 
							<b>Task:</b> Inject a script to pop up a JavaScript <em>alert()</em>in the app.</p>
						<p><span class="glyphicon glyphicon-hand-right"></span>
							<b>Spoiler:</b> Since you can't enter your payload anywhere in the application, you will have to manually edit the address in the URL bar.<em>?num=10+10</em></p>
							<p><span class="glyphicon glyphicon-hand-right"></span>
							<b>Elaboration:</b> To detect DOM XSS vulnerability, we need to manually inspect the JavaScript to identify all the sources and sinks. Some of these sources and sinks you will encounter are:</p>
							<p>Sources (inputs)<br>
							<em> 
							- <b>document.URL</b><br>
							- document.location.hash<br>
							- document.location.href<br>
							- document.location.pathname<br>
							- document.referrer<br>
							- window.name<br>
							</em>
							</p>
							<p>Sinks (Creating/Modifying HTML Elements)<br>
							<em> 
							- createElement<br>
							- <b>innerHTML</b><br>
							- document.write<br>
							- document.writeIn<br>
							- <b>eval function</b><br>
							- setTimeout function<br>
							</em>
							</p>
							<hr>
						<p>
							<b>Low:</b> In this level no validation is being used. You can inject your payload with nothing to hold you back. <br>	
						</p><hr>
						<p>
							<b>Medium:</b>
						</p><hr>
						<p>
							<b>High:</b> 
						</p><hr>
						<p><span class="glyphicon glyphicon-hand-right"></span>
							<b> Links: </b> <br>
							<a href="http://code.google.com/p/domxsswiki/">More on JavaScript sources &amp; links.</a><br>
							<a href="https://github.com/cyberheartmi9/PayloadsAllTheThings/tree/master/XSS%20injection">XSS Payloads</a><br>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>