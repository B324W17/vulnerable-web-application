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
				<div class="login-panel panel panel-default">
					<div class="panel-heading">Log in</div>
						<div class="panel-body">
							<div class="col-md-4">
								<form action="<?php echo($_SERVER["SCRIPT_NAME"]);?>" method="post" role="form">
									<fieldset>
										<div class="form-group">
											<input class="form-control" placeholder="Username" name="username" type="username" >
										</div>
										<div class="form-group">
											<input class="form-control" placeholder="Password" name="password" type="password" >
										</div>
										
										<button type="submit" value="submit" name="login" class="btn btn-primary">Login</button>
									</fieldset>
								</form>
								<?php include 'sqli_union_vulnerable_login.php';?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-12">
			<p class="back-link">Sandwich Vulnerable Web app (SVWA) by <a href="#">SecurityGeeks</a></p>
		</div>	