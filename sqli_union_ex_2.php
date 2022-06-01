<?php include 'includes.php';?>

<body>	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li><a href="sqli_index.php">SQLi</a></li>
				<li><a href="sqli_union.php">Union-based SQLi</a></li>
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
							<label>Search your favorite book: </label>
							<form role="search" action="<?php echo($_SERVER["SCRIPT_NAME"]);?>" method="GET">
								<div class="form-group">
									<input type="text" name="search" action="search" class="form-control" placeholder="Search">
								</div>
							</form>
							<hr>
							<?php include("sqli_union_vulnerable_2.php");?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-12">
		<p class="back-link">Sandwich Vulnerable Web app (SVWA) by <a href="#">SecurityGeeks</a></p>
	</div>