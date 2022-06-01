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
				<li class="active"><a href="xss_index.php">XSS</a></li>
				<li class="active"><a href="xss_dom.php">DOM-based XSS</a></li>
				<li class="active">Hack</li>
			</ol>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="divider"></div>
				<div class="panel panel-primary">
				<div class="panel-heading">Calculate +-*/</div>
					<div class="panel-body">
						<div class="col-md-6">
						
							<h4>Result:</h4>
								<div id="result">Fail</div>
								<script>
									//expects a value from a user and splits the ? sign
									var num = document.URL.split("num=")[1];  
									//passing the value num to eval(string)
									document.getElementById("result").innerHTML = eval(num);
								</script>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<div class="col-sm-12">
		<p class="back-link">Sandwich Vulnerable Web app (SVWA) by <a href="#">SecurityGeeks</a></p>
	</div>