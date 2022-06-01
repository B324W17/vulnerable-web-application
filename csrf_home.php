<?php 
include 'includes.php';
?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index.php">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">CSRF</li>
				
			</ol>
		</div><!--/.row-->
		
		<div class="row">
		<div class="col-lg-12">
		
		</div>
		</div><!--/.row-->
		
		<div class="row">
			<!--/.row-->
			
			<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">Cross-Site Request Forgery
					<a href="csrf.php">
						<span class="pull-right ">
							<button type="button" class="btn btn-md btn-success">Exercise Here</button>
						</span>
					</a>
					
					</div>
				<div class="panel-body">
				<p> A CSRF attack also known as XSRF or session ridding is yet another commonly found vulner-
					ability in web applications. It is often confused with XSS attacks though it’s completely diffrent.
					In a CSRF attack, an attacker forces the browser to make an unintended request on behalf of the
					victim. Changing a user’s password, sending message on behalf of the victim, logging of the vic-
					tim, etc., are the common examples of a CSRF attack.
				</p>
				<p> CSRF attacks work because the website never verifis whether the request came from a legitimate
					user; instead, it just verifis that the request came from the browser of the authorized user.
			    </p>
			    <p>We have two types of CSRF, namely GET-based and POST-basd.
			    </p>
				</div>
			</div>
		</div>
			<!--/.row-->
			<!--/.row-->
			
			<!--/.row-->
			<!--/.row-->
			
			<!--/.row-->
		</div>