<?php 
include 'includes.php';
?>

<body>	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php"><em class="fa fa-home"></em></a></li>
				<li class="active">XSS</li>
			</ol>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="divider"></div>
				<div class="panel panel-primary">
					<div class="panel-heading">Reflected XSS
						<a href="xss_reflected_index.php">
							<span class="pull-right ">
								<button type="button" class="btn btn-md btn-success">Exercise Here</button>
							</span>
						</a>
					</div>
					<div class="panel-body">
						<p>A reflected XSS (or also called a non-persistent XSS attack) is a specific type of XSS whose malicious script bounces off of another website to the victim's browser. It is passed in the query, typically, in the URL.</p>
					</div>
				</div>
			</div>
			
			<div class="col-lg-12">
				<div class="divider"></div>
				<div class="panel panel-primary">
					<div class="panel-heading">Stored XSS
						<a href="xss_stored.php">
							<span class="pull-right ">
								<button type="button" class="btn btn-md btn-success">Exercise Here</button>
							</span>
						</a>
					</div>
					<div class="panel-body">
						<p>Stored XSS occurs when a web application gathers input from a user which might be malicious, and then stores that input in a data store for later use. The input that is stored is not correctly filtered and stays that way.</p>
					</div>
				</div>
			</div>
			
			<div class="col-lg-12">
				<div class="divider"></div>
				<div class="panel panel-primary">
					<div class="panel-heading">DOM-based XSS
						<a href="xss_dom.php">
							<span class="pull-right ">
								<button type="button" class="btn btn-md btn-success">Exercise Here</button>
							</span>
						</a>
					</div>
					<div class="panel-body">
						<p>DOM-based XSS vulnerabilities has been known from a very long time and are similar to traditional reflected/stored XSS vulnerabilities, the only difference being that they occur on the<b> client side</b>. The lack of filtering in client side scripts is the primary cause of DOM-based XSS vulnerabilities. The heavy usage JavaScript often introduces unsafe sinks.</p>
					</div>
				</div>
			</div>		
		</div>
	</div>
		<div class="col-sm-12">
		<p class="back-link">Sandwich Vulnerable Web app (SVWA) by <a href="#">SecurityGeeks</a></p>
	</div>