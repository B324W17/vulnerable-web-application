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
						<p>getimagesize()The function is used to get the image size and related information. If it succeeds, it
						 returns an array. If it fails, it returns.FALSEAnd produce aE_WARNINGLevel error message. The function 
						 alos restricts the file header of the uploaded file to be the image type.</p>
                        <label>Target</label><br>
                        <p>Our target is to bypass the idntification of the uploaded file name by the function.</p>
                        <label>How To</label><br>
						<p>File header spoofing</p>
					</div>
				</div>
			</div>
			<!--/.row-->
		</div>