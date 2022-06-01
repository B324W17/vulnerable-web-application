<?php 
include 'includes.php';
?>

<body>
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
					<a class="navbar-brand" href="index.php">
					<a class="navbar-brand" href="index.php">
					<a class="navbar-brand" href="index.php">
				<a class="navbar-brand" href="index.php"><span> &nbsp; S</span>VWA</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown">
						<a href="reset.php">
						<em class="fa fa-power-off">  &nbsp; Reset</em>
						</a>	
					</li>
					<li class="dropdown">
						<a href="login.php">
						<em class="fa fa-power-off">  &nbsp; Logout</em>
						</a>	
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
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
					<a href="xss_stored.php">
						Stored XSS
					</a>
				</li>
				<li class="active">
					XSS Exercise 1
				</li>
			</ol>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="divider"></div>
				
				<div class="panel panel-primary">
					<div class="panel-heading">Review a book of your choice</div>
					
					<div class="panel-body">
						<form class="form-horizontal" action="<?php echo ($_SERVER["SCRIPT_NAME"]);?>" method="post">
							<fieldset>
								<div class="form-group">
									<label class="col-md-3 control-label" for="name">Name:</label>
									<div class="col-md-5">
										<input id="name" name="name" type="text" placeholder="Your name" class="form-control">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-3 control-label" for="message">Review:</label>
									<div class="col-md-5">
										<textarea class="form-control" id="message" name="message" placeholder="Enter review here..." rows="5"></textarea>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-8 widget-right">
										<button type="submit" name="submit" class="btn btn-md btn-default pull-right">Submit</button>
									</div>
									<button type="submit" name="show_all" class="btn btn-md btn-primary">Show all</button>
								</div>
							</fieldset>
						</form>
					
					<hr>
					
					<?php include("xss_stored_vulnerable_code.php");?>
					</div>
				</div>
			</div>
		</div>
	</div>
		<div class="col-sm-12">
		<p class="back-link">Sandwich Vulnerable Web app (SVWA) by <a href="#">SecurityGeeks</a></p>
	</div>