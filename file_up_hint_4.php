<?php include 'header.php'; ?>

<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.php">
				<span><img src="img/sandwich_3.png" rel="shortcut icon"> &nbsp; Sandwich </span> Vulnerable  Web Application
				</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">3 mins ago</small>
										<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
									<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">1 hour ago</small>
										<a href="#">New message from <strong>Jane Doe</strong>.</a>
									<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">5</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 5 New Followers
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
	<div class="profile-sidebar">
			<form action="#" method="post" role="form">
		<div class="form-group">
						
			<label>Set security level:</label>
			<select name="sel_security" class="form-control">							
					<option>Low</option>						
					<option>Medium</option>
					<option>High</option>
																
			</select>
		</div>

		<button type="submit" name="security" value="submit" class="btn btn-sm btn-success">Submit</button>
		<span><font size="2"></br></br><b>Current security level: </b></font></span>
		</form>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li ><a href="xss_index.php"> Cross-Site Scripting (XSS)</a></li>
			<li><a href="sqli_index.php">SQL Injection (SQLi)</a></li>
			<li><a href="file_inc_home.php">File Inclusion (LFI &amp; RFI)</a></li>
			<li><a href="xxe.php">XML External Entity (XXE)</a></li>
			<li><a href="csrf.php">CSRF</a></li>
			<li><a href="file_up_home.php">File Upload</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li>
					<a href="file_up_home.php">
						File Upload
					</a>
				</li>
				<li >
					<a href="file_upload.php">
						 Exercises
					</a>
					</li>
				<li class="active">Hint</li>

			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<!--/.row-->
			<div class="col-md-12">
				<div class="divider"></div>
				<div class="panel panel-primary">
					<div class="panel-heading">How to exploit
						
					</div>
					<div class="panel-body">
						<label>About</label><br>
						<p>Whitelistin extension is one of client-side validation. Client side validation is a type 
                         of validation which takes place before the inputs are actually sent to the server. The main
                         intention of this validation is to provide better user experience by responding quickly at 
                         the browser level. </p>
                         <p>Whitelisting File extension is a type of protection when only a few specific extensions 
                         are allowed to be uploaded to the server.</p>
                        <label>Target</label><br>
                        <p>Our target is to trick the browsr into uploading our file even though it is not one of the allowed
                        extensions.</p>
                        <label>How To</label><br>
						<p>This type of validation can be bypassed by uploading a file with some type of tricks,
                        null byte injection or using double extensions.</p>
					</div>
				</div>
			</div>
			<!--/.row-->
		</div>
		
	
		
		
	</div>	<!--/.main-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05,.05,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>