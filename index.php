<?php 
include 'header.php';
include 'footer.php';
include 'security_level.php';

if(isset($_SESSION["login"]))
{
 echo '<body>
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
			


			<div class="profile-usertitle">
				<div class="profile-usertitle-name">&nbsp; &nbsp; &nbsp;  <em class="fa fa-user"></em>&nbsp'; echo $_SESSION["login"];echo '</br></br></div>
				<div class="profile-usertitle-status">Security level: <b>'; ?><?php echo $security_level; echo '</b></div>
			</div>
			<div class="clear"></div>
			</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li><a href="xss_index.php"><em class="fa fa-bug">&nbsp;</em>Cross-site scripting</a></li>
			<li ><a href="sqli_index.php"><em class="fa fa-bug">&nbsp;</em>SQL Injection </a></li>
			<li><a href="file_inc_home.php"><em class="fa fa-bug">&nbsp;</em>File Inclusion (LFI &amp; RFI)</a></li>
			<li><a href="xxe_index.php"><em class="fa fa-bug">&nbsp;</em>XML External Entity</a></li>
			<li><a href="csrf.php"><em class="fa fa-bug">&nbsp;</em>CSRF</a></li>
			<li><a href="file_up_home.php"><em class="fa fa-bug">&nbsp;</em>File Upload</a></li>
			
		</ul>
	</div><!--/.sidebar-->


 
			<div class="clear"></div>
		</div>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li>
					<a href="#">
						<em class="fa fa-home"></em>
					</a>
				</li>
				<li class="active">Home</li>
				<li class="active">';echo date("d/m/Y");echo '</li>
			</ol>
		</div>


		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-primary">
				<div class="panel-heading">Description about the web app goes here.</div>
					<div class="panel-body">
					 For the report, Positive Technologies conducted vulnerability assessments against 33 applications. Some of the applications tested were publicly available at the time of analysis, while others worked for internal business functions only. All were susceptible to code and/or configuration weaknesses, while other flaws, such as unpatched software updates, were not considered in the report.<br><br>

Of all the vulnerabilities identified, cross-site scripting (XSS) bugs were the most prevalent at 82 percent of applications, followed by HTTP response splitting and arbitrary file reading at 58 percent and 52 percent, respectively.<br><br>

Aside from enabling attacks against users, the vulnerabilities discovered in 70 percent of applications laid the foundation for denial-of-service (DoS) conditions. This medium-level threat was more common than four others of high severity, including arbitrary file reading (61 percent), operating system (OS) commanding (55 percent), unauthorized database access (45 percent), and deletion or modification of server files (42 percent).
<br><br>
Aside from enabling attacks against users, the vulnerabilities discovered in 70 percent of applications laid the foundation for denial-of-service (DoS) conditions. This medium-level threat was more common than four others of high severity, including arbitrary file reading (61 percent), operating system (OS) commanding (55 percent), unauthorized database access (45 percent), and deletion or modification of server files (42 percent).
					</div>
				</div>
			</div>
		</div>
		
	</div>';
	}
	else
	{
		header("Location: login.php");
	}
	?>