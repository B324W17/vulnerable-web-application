<?php 
include 'includes.php';
?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li>
					<a href="csrf_home.php">
						CSRF
					</a>
				</li>
				<li >
					<a href="csrf.php">
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
						<p>
							Let’s assume that the website target.com utilizes a GET request to change the password. Th
							request looks like the following:
							http://target.com/password.php?newpass=abcd&confpass=abcd
							Th attacker can now modify the newpass and confpass parameters with his own password and
							force the victim’s browser to perform a GET request and hence the passwords would be changed
							to what the attacker sets up. Th code for forcing the victim’s browser to make a get request would
							look something like this:
						</p>
                        <label>Target</label><br>
                        <p> Our target is to change the password of the admin/current user.</p>
                        <label>How To</label><br>
						<p>
							To bypass execute a csrf attack we need 
						</p>
						<label>Low:</label><br>
						<label>Medium:</label><br>
						<label>High:</label>
					</div>
				</div>
			</div>
			<!--/.row-->
		</div>