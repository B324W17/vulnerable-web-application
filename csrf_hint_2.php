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
							Thre is a common myth among web developers that using POST request to submit a form would
							prevent a cross site request forgery; however, this is completely wrong. Performing a CSRF attack
							on POST-based form just takes additional lines of the code.
						</p>
                        <label>Target</label><br>
                        <p> Our target is to change the password of the admin/current user.</p>
                        <label>How To</label><br>
						<p> Creating a self-submitting form to submit your inputs and change the password.</p>
					</div>
				</div>
			</div>
			<!--/.row-->
		</div>
					