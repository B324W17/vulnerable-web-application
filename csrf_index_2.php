<?php 
include 'includes.php';


    if(isset($_SESSION["login"]))
    {
    	echo '
		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
				<div class="row">
					<ol class="breadcrumb">
						<li><a href="index.php">
							<em class="fa fa-home"></em>
						</a></li>
						<li class="active"><a href="csrf_home.php">CSRF</a></li>
						<li class="active"><a href="csrf.php">Exercises</a></li>
						<li class="active">Hack</li>

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
						<div class="panel-heading">Cross site request forgery

						</div>
						<br>
							<p> &nbsp;&nbsp;Change <strong>'; echo $_SESSION["login"]; echo  's </strong> password here: </p>
							<form class="form-horizontal" action="#" method="POST">
							<div class="form-group">
								<div class="col-sm-offset-1 col-sm-10">
										<p><label for="password_new">New password:</label><br>
											<input type="password" AUTOCOMPLETE="off" name="password_new"></p>     
											<p><label for="password_conf">Confirm new password:</label><br>
											<input type="password" AUTOCOMPLETE="off" name="password_conf"></p>
											<button type="submit" value="Change" name="Change">Change</button>
										</div>
										</div>
								    </form>';
    }
    ?>
