<?php include 'includes.php'; ?>

<body>	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li><a href="sqli_index.php">SQLi</a></li>
				<li><a href="sqli_bool_ex.php">Boolean-based SQLi</a></li>
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
							<label>Search title of a book: </label>
							<form role="search" action="" method="GET">
								<div class="form-group">
									<input type="text" name="search" class="form-control" placeholder="Search">
								</div>
							</form>
							<hr>
							<?php include("sqli_bool_vulnerable.php");?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-12">
		<p class="back-link">Sandwich Vulnerable Web app (SVWA) by <a href="#">SecurityGeeks</a></p>
	</div>