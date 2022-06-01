<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">	<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
					<a class="navbar-brand" href="index.php">
					
					
				<a class="navbar-brand" href="index.php"><em class="fa fa-bug"></em><span>&nbsp; Sandwich</span> VWA</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown">
						<a href="logout.php">
						<em class="fa fa-power-off">  &nbsp; Logout</em>
						</a>	
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<form action="<?php echo ($_SERVER["SCRIPT_NAME"]);?>" method="post" role="form">
				<div class="form-group">
					<label>Set security level:</label>
					<select name="security_level" class="form-control">							
						<option value="0">Low</option>						
						<option value="1">Medium</option>
						<option value="2">High</option>
					</select>
				</div>
				<button type="submit" name="form" value="submit" class="btn btn-sm btn-success">Submit</button>
				<font size="2"></br></br>Current security level: <b><?php echo $security_level;?></b></font>
			</form>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li><a href="xss_index.php"><em class="fa fa-bug">&nbsp;</em>Cross-site scripting</a></li>
			<li ><a href="sqli_index.php"><em class="fa fa-bug">&nbsp;</em>SQL Injection </a></li>
			<li><a href="file_inc_home.php"><em class="fa fa-bug">&nbsp;</em>File Inclusion (LFI &amp; RFI)</a></li>
			<li><a href="xxe_index.php"><em class="fa fa-bug">&nbsp;</em>XML External Entity</a></li>
			<li><a href="csrf_home.php"><em class="fa fa-bug">&nbsp;</em>CSRF</a></li>
			<li><a href="file_up_home.php"><em class="fa fa-bug">&nbsp;</em>File Upload</a></li>
		</ul>
	</div><!--/.sidebar-->

