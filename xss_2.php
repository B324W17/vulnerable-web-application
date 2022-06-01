<?php include 'includes.php';?>
<body>	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li>
					<a href="index.php">
						<em class="fa fa-home"></em>
					</a>
				</li>
				<li><a href="xss_index.php">XSS</a></li>
				<li><a href="xss_reflected_index.php">Reflected XSS</a></li>
				<li class="active">Hack!</li>
			</ol>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10">
				<div class="divider"></div>
				<div class="panel panel-primary">
				<div class="panel-heading">What was the previous page?</div>
					<div class="panel-body">
						<div class="col-md-6">
						<?php
							if(isset($_SERVER["HTTP_REFERER"]))
							{
								$referrer=$_SERVER["HTTP_REFERER"];

								echo "The referrer: ".xss($referrer);
							}
							else
							{
								echo "No referrer used!";
							}
						?>
									
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<div class="col-sm-12">
		<p class="back-link">Sandwich Vulnerable Web app (SVWA) by <a href="#">SecurityGeeks</a></p>
	</div>