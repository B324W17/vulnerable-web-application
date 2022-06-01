<?php 
include 'includes.php';
?>
<body>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li>
					<a href="index.php">
						<em class="fa fa-home"></em>
					</a>
				</li>
				<li>
					<a href="xss_index.php">
						XSS
					</a>
				</li>
				<li>
					<a href="xss_reflected_index.php">
						 Reflected XSS
					</a>
				</li>
				<li class="active">Hack!</li>
			</ol>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="divider"></div>
				<div class="panel panel-primary">
					<div class="panel-heading">Reflected XSS Excerise</div>
					<div class="panel-body">
						<form class="form-horizontal" action="xss_1.php" method="GET">
							<div class="form-group">
						    	<label class="control-label col-sm-2" for="name">Your Full Name:</label>
						      	<div class="col-sm-10">
						        	<input type="text" class="form-control" id="name" placeholder="Enter Your Full Name" name="name">
						      	</div>
						    </div>
							<div class="form-group">        
						  		<div class="col-sm-offset-2 col-sm-10">
						        	<button type="submit" name="form" value="submit" class="btn btn-default">Submit</button>
						      	</div>
						    </div>
						</form>
						
						<hr>
						<?php include 'xss_vulnerable_code.php';?>
					</div>
				</div>
			</div>
		</div>
	</div>
		<div class="col-sm-12">
		<p class="back-link">Sandwich Vulnerable Web app (SVWA) by <a href="#">SecurityGeeks</a></p>
	</div>