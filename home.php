<?php 
include 'header.php';
include 'footer.php'; 
?>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">	<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
					<a class="navbar-brand" href="index.php">
					<a class="navbar-brand" href="index.php">
					<a class="navbar-brand" href="index.php">
				<a class="navbar-brand" href="index.php"><span>&nbsp; S</span>VWA</a>
				
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<form action="<?php echo ($_SERVER["SCRIPT_NAME"]);?>" method="post" role="form">
				<div class="form-group">
					
				</div>
				
			</form>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li ><a href="login.php" > <em class="fa fa-navicon">&nbsp; </em> Login</a></li>
			
		</ul>
	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li>
					<a href="#">
						<em class="fa fa-home"></em>
					</a>
				</li>
				<li class="active">Home</li>
				<li class="active"> <?php echo date("d/m/Y");?></li>
			</ol>
		</div>
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"
				 </h1>
			</div>
		</div>

		<div class="alert bg-primary" role="alert">Hackerone 2019 Hacking Report <a href="#" class="pull-right"></a></div>
		<div class="row">
			<div class="col-xs-2 col-md-2">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>XSS</h4>
						<div class="easypiechart" id="easypiechart-blue" data-percent="38" ><span class="percent">38%</span></div>
					</div>
				</div>
			</div>
			<div class="col-xs-2 col-md-2">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>SQLi</h4>
						<div class="easypiechart" id="easypiechart-orange" data-percent="13.5" ><span class="percent">13.5%</span></div>
					</div>
				</div>
			</div>
			<div class="col-xs-2 col-md-2">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>XXE</h4>
						<div class="easypiechart" id="easypiechart-teal" data-percent="1.5" ><span class="percent">1.5%</span></div>
					</div>
				</div>
			</div>
			<div class="col-xs-2 col-md-2">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>File Inclusion</h4>
						<div class="easypiechart" id="easypiechart-red" data-percent="1.2" ><span class="percent">1.2%</span></div>
					</div>
				</div>
			</div>

			<div class="col-xs-2 col-md-2">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>CSRF</h4>
						<div class="easypiechart" id="easypiechart-red" data-percent="1.6" ><span class="percent">1.6%</span></div>
					</div>
				</div>
			</div>

			<div class="col-xs-2 col-md-2">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>File Upload</h4>
						<div class="easypiechart" id="easypiechart-red" data-percent="1.2" ><span class="percent">1.2%</span></div>
					</div>
				</div>
			</div>
		</div>	
	</div>