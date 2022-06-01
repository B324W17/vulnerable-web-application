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
				<li><a href="sqli_index.php">SQLi</a></li>
				<li><a href="sqli_error.php">Error-based SQLi</a></li>
				<li class="active">Hack me</li>
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
					<div class="panel-body">
						<div class="col-md-6">
							<form action="<?php echo($_SERVER["SCRIPT_NAME"]);?>" method="post">
								<div class="form-group">
									<label>Enter user ID: </label>
									<div class="form-group">
								
									<input class="form-control" name="user" type="text" placeholder="User ID">
								</div>
							
								</div>
								
							</form>
							<?php include("sqli_error_vulnerable.php");?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>