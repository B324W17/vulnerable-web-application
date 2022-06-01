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
						<p>Content-Type validation is when the server validate the content of the file by checking the
                         MIME type of the file, which can be shown in the http request. Validating the file to be uploaded 
                         by checking if the content-type of the file is allowed by the file forms.</p>
                        <label>Target</label><br>
                        <p>Our target is to chnge the content-type of our file into the MIME type that the server accepts.</p>
                        <label>How To</label><br>
						<p>We can bypass this type of validation by uploading an executable file but after we manipulate the 
                        request and change the “Content-Type” field to a MIME type of an image that the web server accepts.</p>
					</div>
				</div>
			</div>
			<!--/.row-->
		</div>