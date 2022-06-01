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